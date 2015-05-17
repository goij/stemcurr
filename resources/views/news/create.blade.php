@extends('layout.master')
@section('content')
    <?php
    use App\News;
    ?>
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Create News Article</h2>
        </div>

        <div class="panel-body">
            {!!Form::open(['action'=> 'NewsController@store','class'=>'sky-form','method'=>'post'])!!}
            <fieldset>
                <div class="col-md-12">
                    <label class="label">Title</label>
                    <label class="input">
                        {!!Form::text('title',null,['placeholder'=>'News Article Title'])!!}
                    </label>
                </div>
                <input type="hidden" name="user_id" value="{!!Auth::user()->id!!}">
            </fieldset>
            <fieldset>
                <div class="col-md-12">
                    <label class="label">Article Text</label>
                    <label class="textarea">
                        {!!Form::textarea('text',null,['placeholder'=>'News Article Text'])!!}
                    </label>
                </div>
                <input type="hidden" name="user_id" value="{!!Auth::user()->id!!}">
            </fieldset>
            <footer>
                <div class="col-md-6 col-sm-12">
                    <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Create News Article</button>
                </div>
            </footer>
            {!!Form::close()!!}
            </form>
        </div>
    </div>
@stop
