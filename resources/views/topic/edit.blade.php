@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Unit;
    ?>
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <a data-toggle="collapse" data-target="#collapse-search" href="#" style="text-decoration: none">
                <h2 class="heading color-light">Create New topics</h2>
            </a>
        </div>
        <div id="collapse-search" class="panel-collapse">
            <div class="panel-body">
                {!!Form::model($topic, ['route' => ['topic.update',$topic->id], 'class'=>'sky-form', 'method'=>'put'])!!}
                <fieldset>
                    <div class="col-md-6">
                        <section>
                            <label class="label">Grade Level</label>
                            <label class="select">
                                <select name="grade_id">
                                    @foreach(Grade::all() as $grade)
                                        @if($grade->id == $topic->grade->id)
                                            <option value="{!!$grade->id!!}" selected>{!!$grade->string!!}</option>
                                        @else
                                            <option value="{!!$grade->id!!}">{!!$grade->string!!}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <i></i>
                            </label>
                        </section>
                    </div>
                    <div class="col-md-6">
                        <section>
                            <label class="label">Unit</label>
                            <label class="select">
                                <select name="unit_id">
                                    @foreach(Unit::all() as $unit)
                                        @if($unit->id == $topic->unit->id)
                                            <option value="{!!$unit->id!!}" selected>{!!$unit->name!!}</option>
                                        @else
                                            <option value="{!!$unit->id!!}">{!!$unit->name!!}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <i></i>
                            </label>
                        </section>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label class="label">Title</label>
                        <label class="input">
                            {!!Form::text('title',null,['placeholder'=>'title'])!!}
                        </label>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label class="label">Summary</label>
                        <label class="textarea">
                            {!!Form::textarea('summary',null,['placeholder'=>'Summary'])!!}
                        </label>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <label class="label">Commentary</label>
                        <label class="textarea">
                            {!!Form::textarea('commentary',null,['placeholder'=>'Commentary'])!!}
                        </label>
                    </div>

                </fieldset>
                <footer>
                    <div class="col-md-6 col-sm-12">
                        <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Modify topic
                        </button>
                    </div>
                </footer>
                {!!Form::close()!!}

            </div>
        </div>
    </div>
@stop
