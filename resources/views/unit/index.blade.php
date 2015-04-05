@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">units Listing for Faculty</h2>
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
                    <td>{!!$unit->subject->name!!} - Grade {!!$unit->grade->string!!}</td>
                    <td>{!!$unit->grade->number!!}</td>
                    <td>{!!$unit->subject->name!!}</td>
                    <td>{!!$unit->title!!}</td>
                    <td>
                        <a href="{!!route('unit') . '/' . $unit->id !!}" class="btn-u btn-u-green">View</a>
                        <a class="btn-u btn-u-orange" href="{!!route('unit') . '/' . $unit->id  . '/edit/' !!}">Modify</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {!!$units->render()!!}
    </div>
@stop
