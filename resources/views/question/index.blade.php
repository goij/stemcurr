@extends('layout.master')
@section('content')
    <div class="panel panel-grey">
        <div class="panel-heading">
            <h2 class="heading color-light">Questions</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Question</th>
                <th>Topic</th>
                <th>Grade</th>
                <th>Subject</th>
                @if(!Auth::guest() && Auth::user()->faculty)
                    <th>Actions</th>
                @endif
            </tr>
            @foreach($questions as $question)
                <tr>
                    <td><a href="{!!route('question') . '/' . $question->id !!}">{!!$question->title!!}</a></td>
                    <td><a href="{!!route('topic'). '/' . $question->topic->id!!}"> {!!$question->topic->title!!}</a></td>
                    <td>{!!$question->topic->grade->number!!}</td>
                    <td>{!!$question->topic->subject->name!!}</td>
                    @if(!Auth::guest() && Auth::user()->faculty)

                        <td>

                            {!!Form::open(['action' => ["QuestionController@destroy",
                            $question->id],'class'=>'sky-form',
                            'method'=>'delete','onsubmit'=>'return confirm("Disable question?")'])!!}
                            <a class="btn-u btn-u-orange btn-block"
                               href="{!!route('question') . '/' . $question->id  . '/edit/' !!}">Modify</a>
                            <input type="submit" class="btn-u btn-u-red btn-block" value="Disable">
                            {!!Form::close()!!}
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
        {!!$questions->render()!!}
    </div>
@stop
