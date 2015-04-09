@extends('layout.master')
@section('content')

    <h2>About</h2>
    <div class="row">
        <div class="col-md-12">

            @if(Auth::guest())
            <div class="headline"><h4>Guest</h4></div>
            <p>
                You are currently not logged in, however, you are able to browse the lesson plans as a guest user.
                You can browse the STEM curriculum's units, topics, questions, and standards using the curriculum
                drop down menu. In addition, you are able to browse by grade level, topic, subject, and unit at the bottom of
                the page.
            </p>
            @endif

            <div class="headline"><h4>Teacher</h4></div>
            <p>
                You are able to browse the STEM curriculum's units, topics, questions, and standards using the curriculum
                drop down menu. In addition, you are able to browse by grade level, topic, subject, and unit at the bottom of
                the page. As a teacher you are able to track a STEM Curriculum Unit. You are also
                able to submit feedback containing information about how a question was performed in the classroom.
                You can access these capabilities in the teacher drop down menu.
            </p>

            <div class="headline"><h4>Faculty</h4></div>
            <p>
                You are able to browse the STEM curriculum's units, topics, questions, and standards using the curriculum
                drop down menu. In addition, you are able to browse by grade level, topic, subject, and unit at the bottom of
                the page. You can track a STEM Curriculum Unit and submit feedback containing information about how a
                question was performed in the classroom. These capabilities are available in the teacher drop down menu. As a
                faculty member you also have the ability of managing topics, questions, and standards. Meaning you can modify
                and disable or enable the topics, questions, and standards. As well as creating new topics, questions, and standards.
            </p>


        </div>
    </div>
@stop