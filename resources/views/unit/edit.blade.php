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
            <h2 class="heading color-light">Modify Unit</h2>
        </div>

        <div class="panel-body">
            {!!Form::model($unit,['route'=>['unit.update',$unit->id],'class'=>'sky-form','method'=>'put'])!!}
            <h2>{!!$unit->subject->name!!} - Grade {!!$unit->grade->string!!}</h2>
            <fieldset>

                <div class="col-md-12">
                    <label class="label">Overview</label>
                    <label class="textarea">
                        {!!Form::textarea('overview',null,['placeholder'=>'Overview'])!!}
                    </label>
                </div>
                <div class="col-md-12">
                    <label class="label">Team Leader</label>
                    <label class="textarea">
                        {!!Form::textarea('team_leader',null,['placeholder'=>'Team Leader'])!!}
                    </label>
                </div>
                <div class="col-md-12">
                    <label class="label">Team Members</label>
                    <label class="textarea">
                        {!!Form::textarea('team_members',null,['placeholder'=>'Team Members'])!!}
                    </label>
                </div>
                <div class="col-md-12">
                    <label class="label">Non-Profit Partners</label>
                    <label class="textarea">
                        {!!Form::textarea('non_profit_partners',null,['placeholder'=>'Non-Profit Partners'])!!}
                    </label>
                </div>
                <div class="col-md-12">
                    <label class="label">Corporate Partners</label>
                    <label class="textarea">
                        {!!Form::textarea('corporate_partners',null,['placeholder'=>'Corporate Partners'])!!}
                    </label>
                </div>
                <div class="col-md-12">
                    <label class="label">AU Faculty</label>
                    <label class="textarea">
                        {!!Form::textarea('au_faculty',null,['placeholder'=>'AU Faculty'])!!}
                    </label>
                </div>
            </fieldset>
            <footer>
                <div class="col-md-6 col-sm-12">
                    <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Modify Unit</button>
                </div>
            </footer>
            {!!Form::close()!!}
            </form>
        </div>
    </div>
@stop
