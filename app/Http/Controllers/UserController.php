<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 2/8/2015
 * Time: 9:01 PM
 */

namespace app\Http\Controllers;


class UserController extends Controller{
    /**
     * Display a listing of the resource.
     * GET /user
     *
     * @return Response
     */
    public function __construct()
    {
//		$this->middleware('auth');
    }

    public function getIndex()
    {
        return view('guest.home');
    }

    public function getRegister(){
        return view('user.register');
    }

    public function getLogin(){
        return view('user.login');
    }

    public function getResetPassword(){
        return view('user.reset-password');
    }

}