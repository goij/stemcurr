<?php
/**
 * Created by PhpStorm.
 * User: Mike
 */

namespace App\Http\Controllers;

use Event;
use Illuminate\Http\Request;
use App\Events\UserRegistered;
use Auth;
use Illuminate\Contracts\Auth\Guard;
use App\User;

class UserController extends Controller
{

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
    }


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('user.index',['users'=>$users]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getRegister()
    {
        return view('user.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
                'username' => 'required|max:32|unique:users',
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|confirmed|min:6|max:32']
        );

        event(new UserRegistered($request->except('_token')));
        Event::fire('UserRegistered');

        return redirect('/')->with('message', ' Registered new user.');

    }

    /**
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('user.login');
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function postLogin(Request $request)
    {
        Auth::attempt($request->except('_token'));

        return redirect('/')->with('message', ' Welcome back ' . Auth::user()->name );
    }

    public function getLogout(){
        Auth::logout();

        return redirect('/')->with('message',' Logged out.');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getResetPassword()
    {
        return view('user.reset-password');
    }
}