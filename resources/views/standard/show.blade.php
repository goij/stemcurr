@extends('layout.master')
@section('content')
    @if(isset($standard))
        <div class="panel panel-grey">
            <div class="panel-heading">
                <h4 class="color-light">{!!$standard->name!!}</h4>
            </div>
            <div class="panel-body">
                <p>
                    <h2>ID</h2>
                    {!!$standard->id!!}
                </p>
                <p>
                    <h2>Category</h2>




                @if($standard->category->subcategory == 1)
                    {{$standard->parentCategoryName()}}-
                    {{$standard->categoryName()}}
                @else
                    {{$standard->categoryName()}}
                @endif
                </p>
                <p>
                    <h2>Link</h2>
                    <a href='{!!$standard->link!!}'>{!!$standard->link!!}</a>
                </p>
            </div>
        </div>
    @endif
@stop