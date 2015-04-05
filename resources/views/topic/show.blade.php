@extends('layout.master')
@section('content')
    @if(isset($topic))
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
                                        <a href='{!!$standard->link!!}' target="_blank">{!!$standard->category!!} -
                                            {!!$standard->name!!}</a><br>
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
                        @foreach($topic->questions as $question)
                            <div class="panel panel-dark">
                                <div class="panel-heading">
                                    <h4 class="color-light">{!!$question['title']!!}</h4>
                                </div>
                                <div class="panel-body">
                                    <h2>Evidence of Learning</h2>

                                    <p>{!!$question->evidence!!}</p>

                                    <h2>Standards</h2>
                                    @foreach($question->standards as $standard)
                                        <p>
                                            <a href='{!!$standard->link!!}' target="_blank"><span
                                                        style="font-weight: bold">{!!$standard->category!!}</span> -
                                                {!!$standard->name!!}</a>
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
@stop