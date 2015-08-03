@extends('layout.master')
@section('content')
    <?php
    use App\Grade;
    use App\Subject;
    use App\Standard;
    ?>
    <div class="panel panel-dark-blue">
        <div class="panel-heading">
            <h2 class="heading color-light">Modify Existing standard</h2>
        </div>

        <div class="panel-body">
            {!!Form::model($standard,['route'=>['standard.update',$standard->id],'class'=>'sky-form','method'=>'put'])!!}
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
                                @if($standard->category_id == $category->id)
                                <option value="{!!$category->id!!}" selected>{{$category->name}}</option>
                                @else
                                    <option value="{!!$category->id!!}">{{$category->name}}</option>
                                @endif


                                @foreach(App\Category::all() as $subcategory)
                                    @if(($subcategory->subcategory == 1) && ($category->id == $subcategory->parent_category_id))
                                        @if($standard->category_id == $category->id)
                                            <option value="{!!$subcategory->id!!}" selected>&nbsp;&nbsp;&nbsp;{{$subcategory->name}}</option>
                                        @else
                                                <option value="{!!$subcategory->id!!}">&nbsp;&nbsp;&nbsp;{{$subcategory->name}}</option>
                                        @endif

                                    @endif
                                @endforeach
                            @endforeach

                        </select>
                        <i></i>
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
                    <button type="submit" class="btn-u btn-u-augreen btn-block curl-bottom-right">Modify Standard</button>
                </div>
            </footer>
            {!!Form::close()!!}
            </form>
        </div>
    </div>
@stop
