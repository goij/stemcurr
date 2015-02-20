<?php namespace App\Http\Controllers;

class HomeController extends Controller {
	public function __construct()
	{
//		$this->middleware('auth');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function getIndex(){
		return view('home.index');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function getNews(){
		return view('home.news');
	}
}
