@extends('layout.master')
@section('content')
    @if(isset($response))
        <div class="panel panel-grey">
            <div class="panel-heading">
                <a href="{!!route('question').'/'. $response->question->id!!}"><h4 class="color-light">Original Question
                        - {!!$response->question->title!!}</h4></a>
            </div>
            <div class="panel-body">

                <h2>Evidence of Learning</h2>

                <p>
                    {!!$response->evidence!!}
                </p>

                <h2>Assessment</h2>

                <p>
                    {!!$response->assessment!!}
                </p>

                <h2>Comments</h2>

                <p>
                    {!!$response->comments!!}
                </p>

                <h2>Standards You Fulfilled</h2>
                <ul class="list">
                    @foreach($response->standards as $standard)
                        <li><a href="{!!$standard->link!!}">{{$standard->categoryName()}} - {!!$standard->name!!}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
@stop