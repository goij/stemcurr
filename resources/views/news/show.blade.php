@extends('layout.master')
@section('content')
    @if(isset($article))
        <div class="panel panel-grey">
            <div class="panel-heading">
                <h4 class="color-light">{!!$article->title!!}</h4>
            </div>
            <div class="panel-body">

                <h2>Text</h2>

                <p>
                    {!!$article->text!!}
                </p>

                <h2>Author</h2>

                <p>{!!$article->user->name!!}
                </p>
            </div>
        </div>
    @endif
@stop