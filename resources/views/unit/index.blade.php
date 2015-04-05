@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Units</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th style="width: 30%">Unit</th>
                <th style="width: 5%">Grade</th>
                <th>Subject</th>
                <th>Actions</th>
            </tr>
            @foreach($units as $unit)
                <tr>
                    <td><a href="{!!route('unit') . '/' . $unit->id !!}">{!!$unit->subject->name!!} - Grade {!!$unit->grade->string!!}</a></td>
                    <td>{!!$unit->grade->number!!}</td>
                    <td>{!!$unit->subject->name!!}</td>
                    <td>
                        <a class="btn-u btn-u-orange btn-block" href="{!!route('unit') . '/' . $unit->id  . '/edit/' !!}">Modify</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
