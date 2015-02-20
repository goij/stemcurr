@extends('layout.master')
@section('content')
    @include('lesson.search')
    @if(isset($lessons))
        @foreach($lessons as $lesson)
            <div class="panel panel-dark">
                <div class="panel-heading">
                    <h2 class="heading color-light">{!!$lesson['title']!!}</h2>
                </div>
                <div class="panel-body">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="heading"><h2>Year {!!$lesson->grade['string']!!} - {!!$lesson->unit['name']!!}</h2></div>
                            <div class="heading"><h2>Summary</h2></div>
                            <p>{!!$lesson['summary']!!}</p>
                            <div class="heading"><h2>Commentary</h2></div>
                            <p>{!!$lesson['commentary']!!}</p>
                        </div>
                        <!-- Placeholder Tables -->
                        <div class="row">
                            <table class="table table-bordered table-search-v1">
                                <tr>
                                    <th>
                                        STANDARDS
                                    </th>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="#">5-LS1-1 [SEP 7, DCI: LS1.C, CC5]</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        LABS
                                    </th>
                                    <td>
                                        LABS HERE
                                    </td>
                                </tr>
                                <tr>
                                    <th>PARNTERS</th>
                                    <td>PARTNERS HERE</td>
                                </tr>
                                <tr>
                                    <th>
                                        SUBCATEGORY
                                    </th>
                                    <td>SUBCATEGORY HERE</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@stop
