@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Questions</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Topic</th>
                <th>Actions</th>
            </tr>
            @foreach($questions as $question)
                <tr>
                    <td><a href="{!!route('question') . '/' . $question->id !!}">{!!$question->title!!}</a></td>
                    <td>

                        {!!Form::open(['action' => ["QuestionController@destroy", $question->id],'class'=>'sky-form',
                        'method'=>'delete','onsubmit'=>'return confirm("Disable question?")'])!!}
                        <a class="btn-u btn-u-orange btn-block" href="{!!route('question') . '/' . $question->id  . '/edit/' !!}">Modify</a>
                        <input type="submit" class="btn-u btn-u-red btn-block" value="Disable">
                        {!!Form::close()!!}
                    </td>
                </tr>
            @endforeach
        </table>
        {!!$questions->render()!!}
    </div>
@stop
