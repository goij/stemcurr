@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Subject;
    use App\Standard;
    use App\Response;
    ?>
    @if(!Auth::guest() && Auth::user()->teacher)
        <div class="panel panel-dark-blue">
            <div class="panel-heading">
                <h2 class="heading color-light">Modify Your Response</h2>
            </div>
            <div class="panel-body">
                {!!Form::model($response,['route'=>['response.update',$response->id],'class'=>'sky-form','method'=>'put'])!!}
                <input type="hidden" name="user_id" value="{!!Auth::user()->id!!}">
                <input type="hidden" name="question_id" value="{!!$response->question->id!!}">
                <fieldset>
                    <div class="col-md-12 col-sm-12">
                        <label class="label">Update or Submit New Evidence of Learning</label>
                        <label class="textarea">
                            {!!Form::textarea('evidence',null,['placeholder'=>'Evidence of Learning'])!!}
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
@stop
