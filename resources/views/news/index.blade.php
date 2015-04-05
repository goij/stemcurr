@extends('layout.master')
@section('content')
    <div class="panel panel-grey">
        <div class="panel-heading">
            <h2 class="heading color-light">News</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                @if(!Auth::guest() && Auth::user()->admin)
                    <th>Actions</th>
                @endif
            </tr>
            @foreach($news as $article)
                <tr>
                    <td><a href="{!!route('news') . '/' . $article->id !!}">{!!$article->title!!}</a></td>
                    <td>{!!$article->user->name!!}</td>
                    <td>{!!$article->updated_at!!}</td>
                    <td>{!!$article->created_at!!}</td>
                    @if(!Auth::guest() && Auth::user()->admin)

                        <td>

                            {!!Form::open(['action' => ["NewsController@destroy",
                            $article->id],'class'=>'sky-form',
                            'method'=>'delete','onsubmit'=>'return confirm("Delete Article?")'])!!}
                            <a class="btn-u btn-u-orange btn-block"
                               href="{!!route('news') . '/' . $article->id  . '/edit/' !!}">Modify</a>
                            <input type="submit" class="btn-u btn-u-red btn-block" value="Delete">
                            {!!Form::close()!!}
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
        {!!$news->render()!!}
    </div>
@stop
