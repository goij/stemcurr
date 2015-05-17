@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Attach User To Notifications</h2>
        </div>

        <div class="panel-body">
            {!!Form::open(['action'=> 'NotificationController@store','class'=>'sky-form','method'=>'post'])!!}
            <fieldset>
                <div class="col-md-12">
                    <label class="label">User To Subscire To Admin E-Mails</label>
                    <label class="select">
                        <select name="user_id">
                            @foreach(App\User::all() as $user)
                                @if($user->admin)
                                <option value="{!!$user->id!!}">{!!$user->name!!} - {!!$user->username!!}</option>
                                @endif
                            @endforeach
                        </select>
                        <i></i>
                    </label>
                </div>
            </fieldset>
            <footer>
                <div class="col-md-6 col-sm-12">
                    <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Attach User</button>
                </div>
            </footer>
            {!!Form::close()!!}
            </form>
        </div>
    </div>
@stop
