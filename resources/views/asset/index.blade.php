@extends('layout.master')
@section('content')
    <div class="panel panel-grey">
        <div class="panel-heading">
            <h2 class="heading color-light">Your Assets</h2>
        </div>
        <table class="table table-bordered table-striped" style="word-wrap: break-word;table-layout: fixed;">
            <tr>
                <th>Download</th>
                <th>Link To Resource</th>
                <th>Actions</th>
            </tr>
            @foreach($assets as $asset)
                <tr>
                    <td><a href="{{$asset->path}}">{{$asset->filename}}</a></td>
                    <td>{{route('asset')}}/download/{{Auth::user()->username}}/{{$asset->filename}}</td>
                    <td>

                        {!!Form::open(['action' => ["AssetController@destroy",
                        $asset->id],'class'=>'sky-form',
                        'method'=>'delete','onsubmit'=>'return confirm("Delete Asset? This cannot be undone.")'])!!}
                        <input type="submit" class="btn-u btn-u-red btn-block" value="Delete">
                        {!!Form::close()!!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@stop
