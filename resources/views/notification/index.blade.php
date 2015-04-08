@extends('layout.master')
@section('content')
    <div class="panel panel-orange">
        <div class="panel-heading">
            <h2 class="heading color-light">User Notifcation List</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Remove From Subscriptions</th>
            </tr>
            @foreach($notifications as $notification)
                <tr>
                    <td>{!!$notification->user->username!!}</td>
                    <td>{!!$notification->user->name!!}</td>
                    <td>
                        {!!Form::open(['action' => ["NotificationController@destroy", $notification->user_id],'class'=>'sky-form',
                        'method'=>'delete','onsubmit'=>'return confirm("Delete Notification Tracking?")'])!!}
                        <input type="submit" class="btn-u btn-u-red btn-block" value="Delete">
                        {!!Form::close()!!}
                    </td>
                </tr>
            @endforeach
        </table>
        {!!$notifications->render()!!}
    </div>
@stop
