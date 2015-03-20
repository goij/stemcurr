@extends('layout.master')
@section('content')
    @if(isset($question))
        <div class="panel panel-dark">
            <div class="panel-heading">
                <h4 class="color-light">{!!$question->title!!}</h4>
            </div>
            <div class="panel-body">
                <p>
                    {!!$question->evidence!!}
                </p>
            </div>
        </div>
    @endif
@stop