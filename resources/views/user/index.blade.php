@extends('layout.master')
@section('content')
    @if(!Auth::guest() && (Auth::user()->teacher || Auth::user()->admin || Auth::user()->faculty))
    <div class="panel panel-purple">
        <div class="panel-heading">
            <h2 class="heading color-light">users</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                @if(Auth::user()->teacher || Auth::user()->admin || Auth::user()->faculty)
                    <th>Username</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Last Login</th>
                @endif
                @if(!Auth::guest() && Auth::user()->admin)
                    <th>Actions</th>
                @endif
            </tr>
            @foreach($users as $user)
                <tr>
                    @if(Auth::user()->teacher || Auth::user()->admin || Auth::user()->faculty)
                        <td><a href="{!!route('user')!!}/{!!$user->id!!}">{!!$user->username!!}</a></td>
                        <td>{!!$user->name!!}</td>
                        <td><a href="mailto:{!!$user->email!!}">{!!$user->email!!}</a></td>
                        <td>{!!$user->updated_at!!}</td>
                    @endif
                    @if(!Auth::guest() && Auth::user()->admin)
                        <td>
                            <a class="btn-u btn-u-orange btn-block"
                               href="{!!route('user') . '/' . $user->id  . '/edit/' !!}">Permissions</a>
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
        {!!$users->render()!!}
    </div>
    @else
        <h2>You must be logged in with permissions to view the user list</h2>
    @endif
@stop
