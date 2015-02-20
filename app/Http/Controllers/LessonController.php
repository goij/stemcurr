<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Lesson;
class LessonController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$lessons = Lesson::all();
		return view('lesson.index',['lessons' => $lessons]);
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\View\View
	 */
	public function postCreate(Request $request){
		$input = $request->except('_token');


		//Magic redirect
		$this->validate($request,[
			'title' => 'required|max:255|unique:lessons',
			'summary' => 'required',
			'commentary' => 'required',
			'grade_id' => 'required|exists:grades,id',
			'unit_id' => 'required|exists:units,id',
		]);


//		dd($input);
		Lesson::create($input);
		return view('lesson.create');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return view('lesson.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
