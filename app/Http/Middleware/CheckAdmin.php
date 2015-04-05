<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Guard;

class CheckAdmin {


    protected $auth;

    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

	/**
	 * Handle an incoming request.
     * In this case, we are checking to see if the user has the admin privilege
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
    public function handle($request, Closure $next)
    {
        if($this->auth->guest()){
            return redirect('/')->withErrors(['Must be logged in with admin permissions to access this page']);
        }

        if($this->auth->user()->admin){
            return $next($request);
        }

        return redirect('/')->withErrors(['Must be logged in with admin permissions to access this page']);
    }

}
