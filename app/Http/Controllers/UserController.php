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
        $this->middleware('admin', ['except' => ['index','track','untrack', 'show', 'postRegister', 'getRegister', 'getLogin', 'postLogin', 'getLogout', 'getResetPassword']]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('user.index', ['users' => $users]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit(Request $request, $id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        return view('user.edit', ['user' => $user]);
    }

    public function show($id){
        $user = User::find($id);
        return view('user.show',['user'=>$user]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, ['id' => 'required|exists:users']);
        $user = User::find($id);
        $user->admin = $request->get('admin');
        $user->faculty = $request->get('faculty');
        $user->teacher = $request->get('teacher');
        $user->save();
        return redirect('user')->with('message', ' Updated user permissions');
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

    public function untrack(Request $request, $id){
        $user = Auth::user();
        $user->units()->detach($id);
        return redirect()->back()->with('message',' Untracked Unit!');
    }
    public function track(Request $request,$id){
        $user = Auth::user();
        $user->units()->attach($id);
        return redirect()->back()->with('message',' Tracked Unit!');
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
        if(Auth::attempt($request->except('_token'))) {

            return redirect('/')->with('message', ' Welcome back ' . Auth::user()->name);
        }

        else{
            return redirect('/user/login')->withErrors(['Invalid credentials, Please try again.',
                'If you unable to remember your information, please reset your password.']);
        }
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('/')->with('message', ' Logged out.');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getResetPassword()
    {
        return view('user.reset-password');
    }
}