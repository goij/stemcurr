@extends('layout.master')
@section('content')
    <div class="panel panel-grey">
        <div class="panel-heading">
            <h2 class="heading color-light">All Assets</h2>
        </div>
        <table class="table table-bordered table-striped" style="word-wrap: break-word;table-layout: fixed;">
            <tr>
                <th>Download</th>
                <th>Link To Resource</th>
                <th>File Size (MB)</th>
                <th>Uploader</th>
                <th>Actions</th>
            </tr>
            @foreach($assets as $asset)
                <tr>
                    <td>
                        <a href="{{route('asset')}}/download/{{$asset->user->username}}/{{$asset->filename}}">{{$asset->filename}}</a>
                    </td>
                    <td>{{route('asset')}}/download/{{$asset->user->username}}/{{$asset->filename}}</td>
                    <td>{{$asset->filesize}}MB</td>
                    <td><a href="{{route('user')}}/{{$asset->user->id}}">{{$asset->user->name}}</a></td>
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
        {!!$assets->render()!!}
    </div>
@stop
