@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Topics Listing for Faculty</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Unit</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Options</th>
            </tr>
            @foreach($topics as $topic)
                <tr>
                    <td>{!!$topic->id!!}</td>
                    <td>{!!$topic->unit->name!!} - Grade {!!$topic->grade->string!!}</td>
                    <td>{!!$topic->title!!}</td>
                    <td>{!!$topic->created_at!!}</td>
                    <td>{!!$topic->updated_at!!}</td>
                    <td><a href="{!!route('topic') . '/' . $topic->id !!}" class="btn-u btn-u-green">View</a>
                        <a class="btn-u btn-u-orange"  href="{!!route('topic') . '/edit/' . $topic->id !!}">Modify</a>
                        <a class="btn-u btn-u-red" href="{!!route('topic') . '/destroy/' . $topic->id !!}">Delete</a></td>
                </tr>
            @endforeach
        </table>
        {!!$topics->render()!!}
    </div>
@stop
