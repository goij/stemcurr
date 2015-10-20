<table class="table table-bordered">
    @foreach($categories as $maincategory)
        @if($maincategory->subcategory == 0)
            <tr>
                <th width="25%">{!!$maincategory->name!!}</th>
                <td>
                    @foreach($question->standards as $standard)
                        @if(($standard->category->subcategory == 0)&& ($maincategory->id == $standard->category->id))
                            <a href='{!!$standard->link!!}' target="_blank">{!!$standard->name!!}</a><br />
                        @elseif(($standard->category->subcategory == 1) && ($maincategory->id == $standard->category->parent_category_id))
                            <a href='{!!$standard->link!!}' target="_blank">{!!$standard->name!!}</a><br />
                        @endif
                    @endforeach
                </td>
            </tr>
        @endif
    @endforeach
    <tr>
        <th>AU Course Alignment</th>
        <td>{!!$question->course_align!!}</td>
    </tr>
</table>