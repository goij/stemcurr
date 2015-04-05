@extends('layout.master')
@section('content')
    @if(isset($question))
        <div class="panel panel-grey">
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

        @if(Auth::user()->teacher)
        <div class="panel panel-orange">
            <div class="panel-heading">
                <h4 class="color-light">Provide Feedback For This Question</h4>
                {!!Form::model($question,['route'=>['response.create',$question->id]])!!}
                @foreach($question->standards as $standard)
                    <label class="checkbox">
                        {!!Form::checkbox('standards[]', $standard->id,
                        in_array($standard->id, $standard_ids))
                        !!}<i></i><span style="font-weight: bold">{!!$standard->category!!}</span> - {!!$standard->name!!}
                    </label>
                @endforeach
                {!!Form::close()!!}
            </div>
        </div>
        @endif
    @endif
@stop