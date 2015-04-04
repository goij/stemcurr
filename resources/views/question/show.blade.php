@extends('layout.master')
@section('content')
    @if(isset($question))
        <div class="panel panel-dark">
            <div class="panel-heading">
                <h4 class="color-light">{!!$question->title!!}</h4>
            </div>
            <div class="panel-body">
                <h2>Evidence of Learning</h2>
                <p>{!!$question->evidence!!}</p>
                <h2>Standards</h2>
                @foreach($question->standards as $standard)
                    <p>
                        <a href='{!!$standard->link!!}' target="_blank"><span style="font-weight: bold">{!!$standard->category!!}</span> - {!!$standard->name!!}</a>
                    </p>
                @endforeach
            </div>
        </div>
    @endif
@stop