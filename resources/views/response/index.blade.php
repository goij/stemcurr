@extends('layout.master')
@section('content')
    @if(isset($responses))
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Your Responses</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Response</th>
                <th>Original Question</th>
                <th>Topic</th>
                <th>Unit</th>
                <th>Your Comments</th>
                @if(!Auth::guest() && Auth::user()->teacher)
                    <th>Actions</th>
                @endif
            </tr>
            @foreach($responses as $response)
                <?php

                $question = App\Question::find($response->question_id);
                $unit = $question->topic->unit()
                ?>
                <tr>
                    <td><a href="{!!route('response').'/'.$response->id!!}">Link</a></td>
                    <td> <a href="{!!route('question') . '/' . $question->id !!}">{!!$question->title!!}</a></td></td>
                    <td><a href="{!!route('topic') . '/' . $question->topic->id !!}">{!!$question->topic->title!!}</a></td>
                    <td><a href="{!!route('unit') . '/' . $unit->id!!}">{!!$unit->subject->name!!} - Grade {!!$unit->grade->string!!}</a></td>
                    <td>{!!$response->comments!!}</td>
                @if(!Auth::guest() && Auth::user()->teacher)
                        <td>
                            {!!Form::open(['action' => ["ResponseController@destroy", $response->id],'class'=>'sky-form',
                            'method'=>'delete','onsubmit'=>'return confirm("Delete response?")'])!!}
                            <a class="btn-u btn-u-orange btn-block"
                               href="{!!route('response') . '/' . $response->id  . '/edit/' !!}">Modify</a>
                            <input type="hidden" name="user_id" value="{!!Auth::user()->id!!}">
                            <input type="submit" class="btn-u btn-u-red btn-block" value="Delete">
                            {!!Form::close()!!}
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
    @else
        <h2>You currently have no responses. Why not go to a <a href="{!!route('unit')!!}">question</a> and submit some feedback?</h2>
    @endif
@stop
