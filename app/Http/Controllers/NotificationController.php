<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notification;
use Illuminate\Auth\Guard;

class NotificationController extends Controller {

	/**
	 * The Guard implementation.
	 *
	 * @var Guard
	 */
	protected $auth;


	/**
	 * @param Guard $auth
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
		$this->middleware('admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$notifications = Notification::paginate(10);
		return view('notification.index',['notifications'=>$notifications]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('notification.create');
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(Request $request)
	{
		$input = $request->except('_token');
		$this->validate($request,[
			'user_id'=>'required|exists:users,id|unique:user_notification'
		]);
		Notification::create($input);
		return redirect('notification')->with('message','User added to notification list');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Unused for this model
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//Unused for this model
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//Unused for this model
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

		$notification = Notification::where('user_id','=',$id)->first();
		Notification::destroy($notification->id);

		return redirect('notification')->with('message','User removed from notification list');
	}

}
