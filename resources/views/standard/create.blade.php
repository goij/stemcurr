@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Subject;
    use App\Standard;
    ?>
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Create New standards</h2>
        </div>

        <div class="panel-body">
            {!!Form::open(['action'=> 'StandardController@store','class'=>'sky-form','method'=>'post'])!!}
            <fieldset>
                <div class="col-md-12">
                    <label class="label">Name</label>
                    <label class="input">
                        {!!Form::text('name',null,['placeholder'=>'Name'])!!}
                    </label>
                </div>
                <div class="col-md-12 col-sm-12">
                    <label class="label">Category</label>
                    <label class="select">
                        <select name="category_id">
                        @foreach(App\Category::all() as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                    </label>
                </div>
                <div class="col-md-12 col-sm-12">
                    <label class="label">Link</label>
                    <label class="input">
                        {!!Form::text('link',null,['placeholder'=>'Link'])!!}
                    </label>
                </div>
            </fieldset>
            <footer>
                <div class="col-md-6 col-sm-12">
                    <button type="submit" class="btn-u btn-u-green btn-block curl-bottom-right">Create standard</button>
                </div>
            </footer>
            {!!Form::close()!!}
            </form>
        </div>
    </div>
@stop
