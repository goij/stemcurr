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
                    <td>{!!$question->topic->title!!} ({!!$question->topic->unit->name!!} - Grade {!!$question->topic->grade->string!!})</td>
                    <td>{!!$question->title!!}</td>
                    <td>{!!$question->created_at!!}</td>
                    <td>{!!$question->updated_at!!}</td>
                    <td><a href="{!!route('question') . '/' . $question->id !!}" class="btn-u btn-u-green btn-block">View</a>
                        <a class="btn-u btn-u-orange btn-block"  href="{!!route('question') . '/' .  $question->id . '/edit' !!}">Modify</a>
                        <a class="btn-u btn-u-red btn-block" href="{!!route('question') . '/destroy/' . $question->id !!}">Delete</a></td>
                </tr>
            @endforeach
        </table>
        {!!$questions->render()!!}
    </div>
@stop
