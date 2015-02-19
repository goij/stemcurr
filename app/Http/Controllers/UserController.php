<?php
/**
 * Created by PhpStorm.
 * User: Mike
 */

namespace app\Http\Controllers;

class UserController extends Controller{

    /**
     *
     */
    public function __construct()
    {
		$this->middleware('auth');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('guest.home');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getRegister(){
        return view('user.register');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getLogin(){
        return view('user.login');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getResetPassword(){
        return view('user.reset-password');
    }
}