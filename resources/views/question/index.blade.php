@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Question Listing for Faculty</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Topic</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
            @foreach($questions as $question)
                <tr>
                    <td>{!!$question->id!!}</td>
                    <td>{!!$question->title!!}</td>
                    <td>{!!$question->title!!}</td>
                    <td>
                        {!!Form::open(['action' => ["QuestionController@destroy", $question->id],'class'=>'sky-form',
                        'method'=>'delete','onsubmit'=>'return confirm("Disable question?")'])!!}
                        <a href="{!!route('question') . '/' . $question->id !!}" class="btn-u btn-u-green">View</a>
                        <a class="btn-u btn-u-orange"
                           href="{!!route('question') . '/' . $question->id  . '/edit/' !!}">Modify</a>
                        <input type="submit" class="btn-u btn-u-red" value="Disable">
                        {!!Form::close()!!}
                </tr>
            @endforeach
        </table>
        {!!$questions->render()!!}
    </div>
@stop
