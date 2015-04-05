@extends('layout.master')
@section('content')
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
                        <td>{!!$user->email!!}</td>
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
@stop
