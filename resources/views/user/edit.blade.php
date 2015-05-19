@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Subject;
    use App\Standard;
    use App\Unit;
    ?>
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Modify User</h2>
        </div>

        <div class="panel-body">
            {!!Form::model($user,['route'=>['user.update',$user->id],'class'=>'sky-form','method'=>'put'])!!}
            <h2>{!!$user->username!!} - {!!$user->name!!}</h2>
            <input type="hidden" name="id" value="{!!$user->id!!}">
            <fieldset>
                <div class="col-md-12">
                    <label class="label">Permissions</label>
                    <label class="checkbox">
                        <input type="checkbox" name="partner" value="1"
                        @if($user->partner)
                               checked
                                @endif
                                ><i></i>Partner<br>
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="teacher" value="1"
                        @if($user->teacher)
                               checked
                                @endif
                                ><i></i>Teacher<br>
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="faculty" value="1"
                        @if($user->faculty)
                               checked
                                @endif
                                ><i></i>Faculty<br>
                    </label>
                    <label class="checkbox">
                        <input type="checkbox" name="admin" value="1"
                        @if($user->admin)
                               checked
                                @endif
                                ><i></i>Admin
                    </label>
                </div>
            </fieldset>
            <footer>
                <div class="col-md-6 col-sm-12">
                    <button type="submit" class="btn-u btn-u-augreen btn-block curl-bottom-right">Modify User</button>
                </div>
            </footer>
            {!!Form::close()!!}
            </form>
        </div>
    </div>
@stop
