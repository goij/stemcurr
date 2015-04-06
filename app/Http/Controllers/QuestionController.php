<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Question;
use App\Standard;
use App\Topic;
use DB;
use App\Response;

class QuestionController extends Controller {


    /**
     * Whenever this controller is called, protect all the routes except for those defined below
     * with the faculty middleware.
     */
    public function __construct(){
        $this->middleware('faculty',['except'=>['index','show']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $questions = Question::paginate(10);
		return view('question.index',['questions' => $questions]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->except('_token','standards[]');

		$this->validate($request,
			[
				'topic_id' => "required|exists:topics,id",
				"title" => "required",
				"evidence" => "required"
			]);

		$question = Question::create($input);
        $question->standards()->sync($request->get('standards'));

		return redirect('question')->with('message','Added New Question!');
	}

	public function create(){
        $standards = Standard::all();
        $topics = Topic::all();
        $topics_list = [];
        foreach($topics as $topic){
            $topics_list[$topic->id] = "Grade " . $topic->grade->number . " - " . $topic->subject->name . " - "  . $topic->title;
        }
		return view('question.create',['standards'=>$standards,'topics'=>$topics_list]);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$question = Question::find($id);
        $standard_ids = DB::table('question_standard')->where('question_id','=',$id)->lists('standard_id');
        $responses = Response::where('question_id','=',$question->id)->get();
        return view('question.show',['question'=>$question,'standard_ids'=>$standard_ids,'responses'=>$responses]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$question = Question::find($id);
        $topics = Topic::all();
        $standards = Standard::all();
        $topics_list = [];
        foreach($topics as $topic){
            $topics_list[$topic->id] = "Grade " . $topic->grade->number . " - " . $topic->subject->name . " - "  . $topic->title;
        }
        $standard_ids = DB::table('question_standard')->where('question_id','=',$id)->lists('standard_id');
        return view('question.edit',['question'=>$question, 'standards'=>$standards, 'topics'=>$topics_list, 'standard_ids'=>$standard_ids]);
	}

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function update(Request $request, $id)
	{
        $input = $request->except('_token','standards');
        //Magic redirect
        $this->validate($request,[
            'topic_id' => 'required|exists:topics,id',
            'title' => 'required',
            'evidence' => 'required',
        ]);
        $question =  Question::updateOrCreate(['id' => $id], $input);

        $question->standards()->sync($request->get('standards'));
        return redirect('question')->with('message', "Updated $question->title");	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Question::destroy($id);

        return redirect('question')->with('message', "Question deleted!");
	}

	public function enable(){
		$questions = Question::onlyTrashed()->paginate(5);

		return view('question.enable', ["questions" => $questions]);
	}

	public function restore($id){
		Question::onlyTrashed()->find($id)->restore();

		return redirect('question')->with('message','Question restored!');
	}


}
