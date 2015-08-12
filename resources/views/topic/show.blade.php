@extends('layout.master')
@section('content')
    @if(isset($topic))
        <div class="panel panel-dark-blue">
            <div class="panel-heading">
                <h2 class="heading color-light">{!!$topic['title']!!}</h2>
            </div>

            <div class="panel-body">
                <div class="right" style="text-align:right">
                    <a href="{!!Request::url()!!}/print"><i class="icon-custom icon-sm icon-color-grey fa fa-files-o"></i></a>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="heading"><h2>Grade {!!$topic->grade['string']!!} -
                                {!!$topic->subject['name']!!}</h2>
                        </div>
                        <div class=""><h2>Summary</h2></div>
                        <p>{!!$topic['summary']!!}</p>

                        <div class=""><h2>Commentary</h2></div>
                        <p>{!!$topic['commentary']!!}</p>
                    </div>
                    <div class="row">
                        <h2>Link To Parent Unit</h2>
                        <a href="{!!route('unit') . '/'. $topic->unit()->id!!}">{!!$topic->subject->name!!} - Grade {!!$topic->grade->number!!}</a>
                    </div>
                    <div class="row">
                        <div class=""><h2>Questions</h2></div>
                        @foreach($topic->questions as $question)
                            <div class="panel panel-grey">
                                <div class="panel-heading">
                                    <a href="{!!route('question')!!}/{!!$question->id!!}"><h4 class="color-light">{!!$question['title']!!}</h4></a>
                                </div>
                                <div class="panel-body">
                                    <h2>Evidence of Learning</h2>
                                    <p>{!!$question->evidence!!}</p>


                                    <h2>Standards</h2>
                                    @include('question.standards_table')

                                    <h2>Number of Teacher Responses: {!!$question->numResponses()!!}</h2>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@stop