<?php
/**
 * Created by PhpStorm.
 * User: Mike
 */

namespace app\Http\Controllers;

use Event;
use Log;
use Request;
use App\Events\UserRegistered;

class UserController extends Controller{

    /**
     *
     */
    public function __construct()
    {
//		$this->middleware('auth');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('home.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getRegister(){
        return view('user.register');
    }

    public function postRegister(Request $request){
        $id = null;
        if(Request::has($id)){
            $id = Request::get('id)');
        }
        event(new UserRegistered());
        Event::fire('UserRegistered');
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