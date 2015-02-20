<?php
        use App\Question;
        $questions = Question::all();
        ?>

@extends('layout.master')
@section('content')
    @foreach($questions as $question)
        <pre>{!!print_r($question)!!}</pre>
    @endforeach
@stop