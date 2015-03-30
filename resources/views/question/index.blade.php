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
                <th>Created</th>
                <th>Updated</th>
                <th>Options</th>
            </tr>
            @foreach($questions as $question)
                <tr>
                    <td>{!!$question->id!!}</td>
                    <td>{!!$question->title!!}</td>
                    <td>{!!$question->title!!}</td>
                    <td>{!!$question->created_at!!}</td>
                    <td>{!!$question->updated_at!!}</td>
                    <td>
                        {!!Form::open(['action' => ["QuestionController@destroy", $question->id],'class'=>'sky-form',
                        'method'=>'delete','onsubmit'=>'return confirm("Disable question?")'])!!}
                        <a href="{!!route('question') . '/' . $question->id !!}" class="btn-u btn-u-green btn-block">View</a>
                        <a class="btn-u btn-u-orange btn-block"
                           href="{!!route('question') . '/' . $question->id  . '/edit/' !!}">Modify</a>
                        <input type="submit" class="btn-u btn-u-red btn-block" value="Disable">
                        {!!Form::close()!!}
                </tr>
            @endforeach
        </table>
        {!!$questions->render()!!}
    </div>
@stop
