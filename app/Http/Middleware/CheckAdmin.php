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

		return $next($request);
	}

}
