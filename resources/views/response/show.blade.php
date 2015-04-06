@extends('layout.master')
@section('content')
    @if(isset($response))
        <div class="panel panel-grey">
            <div class="panel-heading">
                <a href="{!!route('question').'/'. $response->question->id!!}"><h4 class="color-light">Original Question - {!!$response->question->title!!}</h4></a>
            </div>
            <div class="panel-body">
                <p>
                <h2>Evidence of Learning</h2>
                {!!$response->evidence!!}
                </p>
                <p>
                <h2>Comments</h2>
                {!!$response->comments!!}
                </p>
                <h2>Standards You Fulfilled</h2>
                <ul class="list">
                @foreach($response->standards as $standard)
                    <li><a href="{!!$standard->link!!}">{!!$standard->category!!} - {!!$standard->name!!}</a></li>
                @endforeach
                </ul>
            </div>
        </div>
    @endif
@stop