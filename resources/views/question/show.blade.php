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
                        <a href='{!!$standard->link!!}' target="_blank"><span style="font-weight: bold">{!!$standard->category!!}</span>
                            - {!!$standard->name!!}</a>
                    </p>
                @endforeach
                <h2>Parent Topic</h2>
                <a href="{!!route('topic') . '/' . $question->topic->id!!}">Link To Parent Topic</a>
            </div>
        </div>
        @if(isset($responses))
            @foreach($responses as $response)
                <div class="panel panel-orange">
                    <div class="panel-heading">
                        <h4 class="color-light">Teacher Response - {!!$response->user->name!!} - {!!$response->updated_at!!}</h4>
                    </div>
                    <div class="panel-body">
                        <h2>Evidence of Learning</h2>

                        <p>{!!$response->evidence!!}</p>

                        <h2>Assessment</h2>

                        <p>{!!$response->assessment!!}</p>

                        <h2>Teacher's Comments</h2>

                        <p>{!!$response->comments!!}</p>

                        <h2>Standards</h2>


                        @foreach($response->standards as $standard)
                            <p>
                                <a href='{!!$standard->link!!}' target="_blank"><span style="font-weight: bold">{!!$standard->category!!}</span>
                                    - {!!$standard->name!!}</a>
                            </p>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endif
        @if(!Auth::guest() && Auth::user()->teacher)
            <div class="panel panel-dark-blue">
                <div class="panel-heading">
                    <h2 class="heading color-light">Submit Teacher Response</h2>
                </div>
                <div class="panel-body">
                    {!!Form::model($question,['action'=>'ResponseController@store','class'=>'sky-form','method'=>'post'])!!}
                    <input type="hidden" name="user_id" value="{!!Auth::user()->id!!}">
                    <input type="hidden" name="question_id" value="{!!$question->id!!}">
                    <fieldset>
                        <div class="col-md-12 col-sm-12">
                            <label class="label">Update or Submit New Evidence of Learning</label>
                            <label class="textarea">
                                {!!Form::textarea('evidence',null,['placeholder'=>'Evidence of Learning'])!!}
                            </label>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label class="label">Assessment</label>
                            <label class="textarea">
                                {!!Form::textarea('assessment',null,['placeholder'=>'Assessment'])!!}
                            </label>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <label class="label">Comments</label>
                            <label class="textarea">
                                {!!Form::textarea('comments',null,['placeholder'=>'Comments About Exercise'])!!}
                            </label>
                        </div>
                    </fieldset>
                    </fieldset>
                    <fieldset>
                        <div class="col-md-12">
                            <label class="label">Standards That You Fulfilled In This Exercise</label>
                            @foreach(App\Standard::all() as $standard)
                                <label class="checkbox">

                                    <input type="checkbox" name="standards[]" value="{!!$standard->id!!}"
                                    @if(in_array($standard->id, $standard_ids))
                                           checked
                                            @endif
                                            >

                                    <i></i><span style="font-weight: bold">{!!$standard->category!!}</span> -
                                    {!!$standard->name!!}
                                </label>
                            @endforeach
                        </div>
                    </fieldset>
                    <footer>
                        <div class="col-md-6 col-sm-12">
                            <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Submit
                                Response
                            </button>
                        </div>
                    </footer>
                    {!!Form::close()!!}
                    </form>
                </div>
            </div>
        @endif
    @endif
@stop