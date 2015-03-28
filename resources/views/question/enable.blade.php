@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Re-Enable Visibility of question</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Subject</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Enable</th>
            </tr>
            @foreach($questions as $question)
                @if($question->topic)
                <tr>
                    <td>{!!$question->id!!}</td>
                    <td>{!!$question->title!!}</td>
                    <td>{!!$question->created_at!!}</td>
                    <td>{!!$question->updated_at!!}</td>
                    <td>
                        {!!Form::open(['action' => ["QuestionController@restore", $question->id],'class'=>'sky-form',
                        'method'=>'post'])!!}
                        <input type="submit" class="btn-u btn-u-green btn-block" value="Enable">
                        {!!Form::close()!!}
                    </td>
                </tr>
                @endif
            @endforeach
        </table>
        {!!$questions->render()!!}
    </div>
@stop
