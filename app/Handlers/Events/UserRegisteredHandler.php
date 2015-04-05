<?php namespace App\Handlers\Events;

use App\Events\UserRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Mail;
use App\User;
class UserRegisteredHandler implements ShouldBeQueued {

	use InteractsWithQueue;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  UserRegistered  $event
	 * @return void
	 */
	public function handle(UserRegistered $event)
	{
        User::create(
            ["username"=>$event->user_data['username'],
            "name"=>$event->user_data['name'],
            "email"=>$event->user_data['email'],
            "password"=>bcrypt($event->user_data['password'])]);
		Mail::queue('mail.register', ['username' =>$event->user_data['username']], function($message){
			$message->to('mmichaels01@aurora.edu');
		});
	}

}
