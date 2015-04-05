@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Topics</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Topic Name</th>
                <th style="width: 30%">Unit</th>
                <th style="width: 5%">Grade</th>
                <th>Subject</th>
                @if(!Auth::guest() && Auth::user()->faculty)
                <th>Actions</th>
                @endif
            </tr>
            <?php use App\Unit;?>
            @foreach($topics as $topic)
                <tr>
                    <td><a href="{!!route('topic') . '/' . $topic->id !!}">{!!$topic->title!!}</a></td>
                    <td><a href="{!!route('unit')!!}/{!!Unit::where('subject_id','=',$topic->subject->id)->where('grade_id','=',$topic->grade->id)->firstOrFail()->id!!}">
                    {!!$topic->subject->name!!} - Grade {!!$topic->grade->string!!}</a></td>
                    <td>{!!$topic->grade->number!!}</td>
                    <td>{!!$topic->subject->name!!}</td>
                    @if(!Auth::guest() && Auth::user()->faculty)
                    <td>
                        {!!Form::open(['action' => ["TopicController@destroy", $topic->id],'class'=>'sky-form',
                        'method'=>'delete','onsubmit'=>'return confirm("Disable topic?")'])!!}
                        <a class="btn-u btn-u-orange btn-block"
                           href="{!!route('topic') . '/' . $topic->id  . '/edit/' !!}">Modify</a>
                        <input type="submit" class="btn-u btn-u-red btn-block" value="Disable">
                        {!!Form::close()!!}
                    </td>
                    @endif
                </tr>
            @endforeach
        </table>
        {!!$topics->render()!!}
    </div>
@stop
