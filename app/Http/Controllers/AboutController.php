<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller {


	/**
	 * @return \Illuminate\View\View
	 */
	public function getIndex(){
		return view('about.index');
	}

    public function getAbout(){
        return view('about.about');
    }
}
