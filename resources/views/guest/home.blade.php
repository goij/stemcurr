@extends('layout.master')

@section('styles')
    <!-- CSS Page Style -->
    {{--<link rel="stylesheet" href="css/pages/blog_magazine.css">--}}
@stop

@section('content')
<div class="container content">
    <div class="row">
        <div class="col-sm-9">

            Who
        </div>
        <div class="col-sm-3">
            @foreach(range(0,100) as $number)
                Wat {!!$number!!}
                <hr>
            @endforeach
        </div>
    </div>
</div><!--/container-->
@stop