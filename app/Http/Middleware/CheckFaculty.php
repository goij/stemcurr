<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Guard;

class CheckFaculty {

    protected $auth;

    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

	/**
	 * Handle an incoming request.
	 * In this case we are checking if the user has the faculty permission
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if($this->auth->guest()){
            return redirect('/')->withErrors(['Must be logged in with faculty permissions to access this page']);
        }

        if($this->auth->user()->faculty){
            return $next($request);
        }

        return redirect('/')->withErrors(['Must be logged in with faculty permissions to access this page']);
	}

}
