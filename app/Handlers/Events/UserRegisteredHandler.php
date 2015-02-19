<?php namespace App\Handlers\Events;

use App\Events\UserRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Mail;

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
		Mail::queue('mail.register', ['user' =>'test'], function($message){
			$message->to('mmichaels01@aurora.edu');
		});
	}

}
