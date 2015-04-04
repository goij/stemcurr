@extends('layout.master')
@section('content')
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Standard Listing for Faculty</h2>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
            @foreach($standards as $standard)
                <tr>
                    <td>{!!$standard->id!!}</td>
                    <td>{!!$standard->name!!}</td>
                    <td>{!!$standard->category!!}</td>
                    <td><a href='{!!$standard->link!!}' target="_blank">{!!$standard->link!!}</a></td>
                    <td>
                        {!!Form::open(['action' => ["StandardController@destroy", $standard->id],'class'=>'sky-form',
                        'method'=>'delete','onsubmit'=>'return confirm("Delete standard?")'])!!}
                        <a href="{!!route('standard') . '/' . $standard->id !!}" class="btn-u btn-u-green">View</a>
                        <a class="btn-u btn-u-orange"
                           href="{!!route('standard') . '/' . $standard->id  . '/edit/' !!}">Modify</a>
                        <input type="submit" class="btn-u btn-u-red" value="Delete">
                        {!!Form::close()!!}
                </tr>
            @endforeach
        </table>
        {!!$standards->render()!!}
    </div>
@stop
