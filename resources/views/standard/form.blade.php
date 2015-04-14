<div class="panel-group acc-v1" id="accordion-1">
    @foreach($categories as $category)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1"
                       href="#cat{{$category->id}}">
                        {{$category->name}}
                    </a>
                </h4>
            </div>
            <div id="cat{!!$category->id!!}" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">

                            @foreach($category->standards as $standard)
                                @if(isset($standard_ids) &&  in_array($standard->id, $standard_ids))
                                    <label class="checkbox">
                                        <input type="checkbox" name="standards[]" value="{{$standard->id}}"checked><i></i><span
                                                style="font-weight: bold">{{$standard->name}}</span>
                                    </label>
                                @else
                                    <label class="checkbox">
                                        <input type="checkbox" name="standards[]" value="{{$standard->id}}"><i></i><span
                                                style="font-weight: bold">{{$standard->name}}</span>
                                    </label>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>