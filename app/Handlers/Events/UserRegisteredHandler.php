<?php namespace App\Handlers\Events;

use App\Events\UserRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Mail;
use App\User;
use App\Notification;

class UserRegisteredHandler implements ShouldBeQueued
{

    use InteractsWithQueue;

    /**
     *
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $username = $event->user_data['username'];
        $name = $event->user_data['name'];
        $email = $event->user_data['email'];
        User::create(
            ["username" => $event->user_data['username'],
                "name" => $event->user_data['name'],
                "email" => $event->user_data['email'],
                "password" => bcrypt($event->user_data['password'])]);

        Mail::queue('mail.register', ['username' => $username], function ($message) use ($email) {
            $message->to($email);
        });

        //Send an e-mail to each user subscribed to the notification list
        foreach (Notification::all() as $notification) {
            Mail::queue('mail.user_registered', ['username' => $username,'name'=>$name], function ($message) use ($notification) {
                $message->to($notification->user->email);
            });
        }

    }

}
