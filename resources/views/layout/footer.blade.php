<div class="footer-v3">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-sm-4 md-margin-bottom-40 text-left">
                    <a href="{!!route('index')!!}"><img id="logo-footer" class="footer-logo" src='{!!asset("img/au-footer.png")!!}' alt="AU" style="width:200px; height:100px"></a>
                    <p>     The John C. Dunham STEM Partnership School on the Aurora University campus serves students in third through eighth grades in the East Aurora,
                        Indian Prairie and West Aurora school districts. It is staffed through a unique professional development strategy that engages teachers from the
                        partner districts as faculty while they complete AU graduate coursework and become leaders in mathematics and science education.
                    </p>
                </div><!--/col-md-3-->
                <!-- End About -->

                <!-- Simple List -->
                <div class="col-sm-2 md-margin-bottom-40">
                    <div class="thumb-headline"><h2 class="headline">About AU STEM</h2></div>
                    <ul class="list-unstyled simple-list margin-bottom-20">
                        <li><a href="{!!route('index')!!}">Home</a></li>
                        <li><a href="{!!route('news')!!}">News</a></li>
                        <li><a href="{!!route('about')!!}">About</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>

                    <div class="thumb-headline"><h2 class="headline">Browse</h2></div>
                    <ul class="list-unstyled simple-list margin-bottom-20">
                        <li><a href="{!!route('unit')!!}">Units</a></li>
                        <li><a href="{!!route('topic')!!}">Topics</a></li>
                        <li><a href="{!!route('question')!!}">Questions</a></li>
                        <li><a href="{!!route('standard')!!}">Standards</a></li>
                        <li><a href="{!!route('user')!!}">Users</a></li>
                        <li><a href="{!!route('news')!!}">News</a></li>
                    </ul>
                </div><!--/col-md-3-->

                <div class="col-sm-3">
                    <div class="thumb-headline"><h2 class="headline">Curriculum By Grade</h2></div>
                    <ul class="list-unstyled simple-list margin-bottom-20">
                        <?php use App\Grade;use App\Subject;?>
                        @foreach(Grade::all() as $grade)
                            <li><a href="{!!route('unit')!!}/?grade={!!$grade->id!!}">{!!$grade->string!!}</a></li>
                        @endforeach
                    </ul>

                    <div class="thumb-headline"><h2 class="headline">Curriculum By Subject</h2></div>
                    <ul class="list-unstyled simple-list">
                        @foreach(Subject::all() as $subject)
                            <li><a href="{!!route('unit')!!}/?subject={!!$subject->id!!}">{!!$subject->name!!}</a></li>
                        @endforeach
                    </ul>
                    </li>
                </div><!--/col-md-3-->

                <div class="col-sm-3">
                    <div class="thumb-headline"><h2 class="headline">Contact</h2></div>
                    <p>
                        AU STEM Curriculum<br>
                        Contact Information Here
                    </p>
                </div><!--/col-md-3-->
                <!-- End Simple List -->
            </div>
        </div>
    </div><!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <!-- Terms Info-->
                <div class="col-md-6">
                    <p>
                        2015 Aurora University
                        <a target="_blank" href="http://www.aurora.edu">Aurora.edu</a> | <a href="#">Link</a> | <a href="#">Link</a>
                    </p>
                </div>
                <div class="col-md-6 text-right">
                    <p>
                        2015 Aurora University
                        <a target="_blank" href="http://www.aurora.edu">Aurora.edu</a> | <a href="#">Link</a> | <a href="#">Link</a>
                    </p>
                </div>
            </div>
        </div>
    </div><!--/copyright-->
</div>