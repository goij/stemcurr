@extends('layout.simple')
@section('content')
    @if(isset($unit))
        <div class="panel panel-augreen">
            <div class="panel-heading">
                <h2 class="heading color-light">{!!$unit->subject->name!!} - Grade {!!$unit->grade->string!!}</h2>
            </div>
            <div class="panel-body">
                <div class="heading"><h2>Overview</h2></div>

                <p>{!!$unit->overview!!}</p>
                <table class="table table-bordered">
                    <tr>
                        <th>Grade</th>
                        <td>{!!$unit->grade->string!!}</td>
                    </tr>
                    <tr>
                        <th>Subject</th>
                        <td>{!!$unit->subject->name!!}</td>
                    </tr>
                    <tr>
                        <th>Team Leader</th>
                        <td>{!!$unit->team_leader!!}</td>
                    </tr>
                    <tr>
                        <th>Team Members</th>
                        <td>{!!$unit->team_members!!}</td>
                    </tr>
                    <tr>
                        <th>Non-Profit Partners</th>
                        <td>{!!$unit->non_profit_partners!!}</td>
                    </tr>
                    <tr>
                        <th>Corporate Partners</th>
                        <td>{!!$unit->corporate_partners!!}</td>
                    </tr>
                    <tr>
                        <th>AU Faculty</th>
                        <td>{!!$unit->au_faculty!!}</td>
                    </tr>
                </table>
                <div class="heading"><h2>Topics Within This Unit</h2></div>
                @endif
                @if(isset($topics))
                    @foreach($topics as $topic)
                        <div class="panel panel-dark-blue">
                            <div class="panel-heading">
                                <h2 class="heading color-light">{!!$topic['title']!!}</h2>

                            </div>

                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="heading"><h2>Grade {!!$topic->grade['string']!!} -
                                                {!!$topic->subject['name']!!}</h2>
                                        </div>
                                        <div class="heading"><h2>Summary</h2></div>
                                        <p>{!!$topic['summary']!!}</p>

                                        <div class="heading"><h2>Commentary</h2></div>
                                        <p>{!!$topic['commentary']!!}</p>
                                    </div>
                                    <!-- Placeholder Tables -->
                                    <div class="row">
                                        <table class="table table-bordered table-search-v1">
                                            <tr>
                                                <th>
                                                    STANDARDS
                                                </th>
                                                <td>

                                                    @foreach($topic->standards() as $standard)
                                                        @if($standard->category->subcategory == 0)
                                                            <a href='{!!$standard->link!!}' target="_blank">{!!$standard->categoryName()!!}
                                                                - {!!$standard->name!!}</a><br>
                                                        @elseif($standard->category->subcategory == 1)
                                                            <a href='{!!$standard->link!!}' target="_blank">{!!$standard->parentCategoryName()!!} - {!!$standard->categoryName()!!}
                                                                - {!!$standard->name!!}</a><br>
                                                        @endif
                                                    @endforeach

                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    LABS
                                                </th>
                                                <td>
                                                    {!!$topic->labs!!}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>PARNTERS</th>
                                                <td>{!!$topic->partners!!}</td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    SUBCATEGORY
                                                </th>
                                                <td>{!!$topic->subcategories!!}</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="heading"><h2>Questions</h2></div>
                                        <?php $questions = $topic->questions;?>
                                        @foreach($questions as $question)
                                            <div class="panel panel-grey">
                                                <div class="panel-heading">
                                                    <h4 class="color-light">{!!$question['title']!!}</h4>
                                                </div>
                                                <div class="panel-body">
                                                    <h2>Evidence of Learning</h2>

                                                    <p>{!!$question->evidence!!}</p>

                                                    <h2>Standards</h2>
                                                    @foreach($question->standards as $standard)
                                                        <p>
                                                            @if($standard->category->subcategory == 0)
                                                                <a href='{!!$standard->link!!}' target="_blank"><span style="font-weight: bold">{!!$standard->categoryName()!!}</span>
                                                                    - {!!$standard->name!!}</a>
                                                            @elseif($standard->category->subcategory == 1)
                                                                <a href='{!!$standard->link!!}' target="_blank"><span style="font-weight: bold">{!!$standard->parentCategoryName()!!} - {!!$standard->categoryName()!!}</span>
                                                                    - {!!$standard->name!!}</a>
                                                            @endif
                                                        </p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                @endif
            </div>
        </div>
@stop