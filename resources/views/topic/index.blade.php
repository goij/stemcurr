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
                    <td>
                        {!!Form::open(['class'=>'sky-form',
                        'method'=>'delete'])!!}
                        <a href="{!!route('topic') . '/' . $topic->id !!}" class="btn-u btn-u-green btn-block">View</a>
                        <a class="btn-u btn-u-orange btn-block"
                           href="{!!route('topic') . '/' . $topic->id  . '/edit/' !!}">Modify</a>
                        <input type="submit" class="btn-u btn-u-red btn-block" value="Disable">
                        {!!Form::close()!!}
                    </td>

                </tr>
            @endforeach
        </table>
        {!!$topics->render()!!}
    </div>
@stop
