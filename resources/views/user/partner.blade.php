@extends('layout.master')
@section('content')
    @if(!Auth::guest() && (Auth::user()->teacher || Auth::user()->admin || Auth::user()->faculty))
                <div class="panel panel-augreen">
                    <div class="panel-heading">
                <h2 class="heading color-light">Partners</h2>
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    @if(Auth::user()->teacher || Auth::user()->admin || Auth::user()->faculty)
                        {{--<th>Username</th>--}}
                        <th>Name</th>
                        <th>Affiliation</th>
                        <th>Email</th>
                    @endif
                    {{--
                    @if(!Auth::guest() && Auth::user()->admin)
                        <th>Actions</th>
                    @endif
                    --}}
                </tr>
                @foreach($users as $user)
                    <tr>
                        @if($user->partner == 1)
                            @if(Auth::user()->teacher || Auth::user()->admin || Auth::user()->faculty)
                                {{--<td><a href="{!!route('user')!!}/{!!$user->id!!}">{!!$user->username!!}</a></td>--}}
                                <td>{!!$user->name!!}</td>
                                <td>{!!$user->affiliation!!}</td>
                                <td><a href="mailto:{!!$user->email!!}">{!!$user->email!!}</a></td>
                                {{--
                                @if(!Auth::guest() && Auth::user()->admin)
                                    <td>
                                        <a class="btn-u btn-u-orange btn-block"
                                           href="{!!route('user') . '/' . $user->id  . '/edit/' !!}">Permissions</a>
                                    </td>
                                @endif
                                --}}
                            @endif
                        @endif

                    </tr>
                @endforeach
            </table>
            {!!$users->render()!!}
        </div>
    @else
        <h2>You must be logged in with permissions to view the partner list</h2>
    @endif
@stop
