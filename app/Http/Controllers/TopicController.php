<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Topic;
use DB;
use App\Standard;
use App\Question;
use App\Category;

/**
 * Class TopicController
 * @package App\Http\Controllers
 */
class TopicController extends Controller {

    /**
     * Whenever this controller is called, protect all the routes except for those defined below
     * with the faculty middleware.
     */
    public function __construct(){
        $this->middleware('faculty',['except'=>['index','show','showprint']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$topics = Topic::paginate(10);

		return view('topic.index',['topics' => $topics]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('topic.create');
	}


    /**
     * @param Request $request
     * @return \Illuminate\View\View
     */
	public function store(Request $request)
	{
        $input = $request->except('_token');
        //Magic redirect
        $this->validate($request,[
            'title' => 'required|max:255',
            'summary' => 'required',
            'commentary' => 'required',
            'grade_id' => 'required|exists:grades,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);
        $topic = Topic::create($input);
        return redirect('topic')->with('message', "Added new topic $topic->title");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$topic = Topic::find($id);
        $categories = Category::all();
        return view('topic.show', ['topic' => $topic, 'categories' => $categories]);
	}

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function showprint($id)
    {
        $topic = Topic::find($id);
        $categories = Category::all();
        return view('topic.showprint', ['topic' => $topic, 'categories' => $categories]);
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $topic = Topic::find($id);

		return view('topic.edit', ['topic' => $topic]);
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
            'title' => 'required|max:255',
            'summary' => 'required',
            'commentary' => 'required',
            'grade_id' => 'required|exists:grades,id',
            'subject_id' => 'required|exists:subjects,id',
        ]);
        $topic =  Topic::updateOrCreate(['id' => $id], $input);
        return redirect('topic')->with('message', "Updated $topic->title");
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Topic::destroy($id);

		return redirect('topic')->with('message','Topic disabled!');
	}

	/**
	 * Custom resource functionality below
	 */

	/**
	 * @return \Illuminate\View\View
	 */
	public function enable(){
		$topics = Topic::onlyTrashed()->paginate(10);
		return view('topic.enable',['topics' => $topics]);
	}

	/**
	 * @param $id
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function restore($id){
		Topic::onlyTrashed()->find($id)->restore();

		return redirect('topic')->with('message','Topic re-enabled!');
	}

}
