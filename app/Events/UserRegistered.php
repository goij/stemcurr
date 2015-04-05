<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;

class UserRegistered extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */

    public $user_data;

	public function __construct($user_data)
	{
        $this->user_data = $user_data;
	}

}
