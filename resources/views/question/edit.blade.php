@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Subject;
    use App\Question;
    use App\Standard;
    ?>
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Modify Existing Question</h2>
        </div>

        <div class="panel-body">
            {!!Form::model($question,['route'=>['question.update',$question->id],'class'=>'sky-form','method'=>'put'])!!}
            <fieldset>
                <div class="col-md-12">
                    <label class="label">Topic</label>
                    <label class="select">
                        {!!Form::select('topic_id',$topics)!!}
                        <i></i>
                    </label>
                </div>
                <div class="col-md-12 col-sm-12">
                    <label class="label">Title</label>
                    <label class="input">
                        {!!Form::text('title',null,['placeholder'=>'Title'])!!}
                    </label>
                </div>
                <div class="col-md-12 col-sm-12">
                    <label class="label">Evidence</label>
                    <label class="textarea">
                        {!!Form::textarea('evidence',null,['placeholder'=>'Evidence of Learning'])!!}
                    </label>
                </div>
            </fieldset>
            <fieldset>
                <div class="col-md-12">
                    <h2>Standards</h2>
                    @include('standard.form')
                </div>
            </fieldset>
            <footer>
                <div class="col-md-6 col-sm-12">
                    <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Modify Question</button>
                </div>
            </footer>
            {!!Form::close()!!}
            </form>
        </div>
    </div>
@stop
