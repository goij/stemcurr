@extends('layout.master')
@section('content')
    <div class="panel panel-purple">
        <div class="panel-heading">
            <h2 class="heading color-light">Units</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th style="width: 30%">Unit</th>
                <th style="width: 5%">Grade</th>
                <th>Subject</th>
                @if(!Auth::guest() && Auth::user()->teacher)
                    <th>Track</th>
                @endif
            @if(!Auth::guest() && Auth::user()->faculty)
                    <th>Actions</th>
                @endif
            </tr>
            @foreach($units as $unit)
                <tr>
                    <td><a href="{!!route('unit') . '/' . $unit->id !!}">{!!$unit->subject->name!!} - Grade
                            {!!$unit->grade->string!!}</a></td>
                    <td>{!!$unit->grade->number!!}</td>
                    <td>{!!$unit->subject->name!!}</td>

                    @if(!Auth::guest() && Auth::user()->teacher)
                        <td>
                        @if(in_array($unit->id,Auth::user()->units->lists('id')))
                            <a href="{!!route('user').'/untrack/'. $unit->id!!}" class="btn btn-u btn-u-red btn-block">Untrack</a>
                        @else
                            <a href="{!!route('user').'/track/'. $unit->id!!}" class="btn btn-u btn-block">Track</a>
                        @endif
                        </td>
                    @endif
                    @if(!Auth::guest() && Auth::user()->faculty)
                        <td>
                            <a class="btn-u btn-u-orange btn-block"
                               href="{!!route('unit') . '/' . $unit->id  . '/edit/' !!}">Modify</a>
                        </td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
@stop
