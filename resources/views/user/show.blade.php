@extends('layout.master')
@section('content')
    @if(!Auth::guest() && (Auth::user()->teacher || Auth::user()->admin || Auth::user()->faculty))
        @if(isset($user))
            <div class="panel panel-grey">
                <div class="panel-heading">
                    <h4 class="color-light">{!!$user->username!!}</h4>
                </div>
                <div class="panel-body">
                    <h2>Name</h2>

                    <p>
                        {!!$user->name!!}
                    </p>

                    <h2>E-Mail</h2>

                    <p>
                        <a href="mailto:{!!$user->email!!}">{!!$user->email!!}</a>
                    </p>


                    <h2>Last Logged In</h2>

                    <p>
                        {!!$user->updated_at!!}
                    </p>
                </div>
            </div>
        @endif
    @else
        <h2>You must be logged in with permissions to view user information.</h2>
    @endif
@stop