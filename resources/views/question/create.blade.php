@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Subject;
    ?>
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
                <h2 class="heading color-light">Create New Questions</h2>
        </div>

            <div class="panel-body">
                {!!Form::open(['action'=> 'QuestionController@store','class'=>'sky-form','method'=>'post'])!!}
                    <fieldset>
                        <div class="col-md-12">
                                <label class="label">Lesson ID</label>
                                <label class="input">
                                    {!!Form::text('topic_id',null,['placeholder'=>'Lesson ID'])!!}
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
                    <footer>
                        <div class="col-md-6 col-sm-12">
                            <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Create Question</button>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <button type="clear" class="btn-u btn-u-red btn-block curl-bottom-right">Clear</button>
                        </div>
                    </footer>
                    {!!Form::close()!!}
                </form>
        </div>
    </div>
@stop
