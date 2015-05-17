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
                        <h2>Standards</h2>
                        @include('standard.form')
                    </div>
                </fieldset>
                <footer>
                    <div class="col-md-6 col-sm-12">
                        <button type="submit" class="btn-u btn-u-augreen btn-block curl-bottom-right">Submit
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
