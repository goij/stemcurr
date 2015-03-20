<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $questions = Question::paginate(5);
		return view('question.index',['questions' => $questions]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->except('_token');

		$this->validate($request,
			[
				'topic_id' => "required|exists:topics,id",
				"title" => "required",
				"evidence" => "required"
			]);

		Question::create($input);

		return redirect('question')->with('message','Added New Question!');
	}

	public function create(){
		return view('question.create');
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

        return view('question.show',['question'=>$question]);
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

        return view('question.edit',['question'=>$question]);
	}

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
	public function update(Request $request, $id)
	{
        $input = $request->except('_token');
        //Magic redirect
        $this->validate($request,[
            'topic_id' => 'required|exists:topics,id',
            'title' => 'required',
            'evidence' => 'required',
        ]);
        $question =  Question::updateOrCreate(['id' => $id], $input);
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
