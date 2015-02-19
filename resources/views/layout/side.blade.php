@yield('layout.side-custom')

<!-- User Specific Panels -->
<div class="headline">
    <h3>Your Lesson Plans</h3>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>

            <tr>
                <th>1</th>
                <th><a href="#">Matter & Energy 001</a></th>
            </tr>
            <tr>
                <th>2</th>
                <th><a href="#">Structure & Function 001</a></th>
            </tr>
            <tr>
                <th>3</th>
                <th><a href="#">Force & Motion 001</a></th>
            </tr>
        </table>
</div>

<!-- Photo Stream -->
<div class="headline"><h3>Recent Photos</h3></div>
<ul class="list-unstyled blog-photos margin-bottom-30">
    @foreach(range(0, 25) as $num)
        <li><a href="#"><img src="{!! asset('img/placeholder.png') !!}" alt="" class="hover-effect"></a></li>
    @endforeach
</ul><!--/blog-photos-->
<!-- End Photo Stream -->

<!-- Choose Us -->
<div class="who margin-bottom-30">
    <div class="headline"><h3>Quick Links</h3></div>
    <p>Put some links for easy navigation here.</p>
    <ul class="list-unstyled">
        <li><a href="#"><i class="fa fa-desktop"></i>Link #1</a></li>
        <li><a href="#"><i class="fa fa-bullhorn"></i>Link #1</a></li>
        <li><a href="#"><i class="fa fa-globe"></i>Link #1</a></li>
        <li><a href="#"><i class="fa fa-group"></i>Link #1</a></li>
    </ul>
</div><!--/who-->
<!-- End Choose Us -->

<!-- News -->
<div class="blog-twitter">
    <div class="headline"><h3>Latest News</h3></div>
        @foreach(range(0,3) as $num)
            <li class="list-unstyled">
                <a href="#"><strong>News Article 1</strong></a>
                <p style="text-indent: 10px;">News article {!!$num!!} text.News article {!!$num!!} text.News article {!!$num!!} text.News article {!!$num!!} text.News article {!!$num!!} text....</p>
            </li>
            @endforeach
    </div>
</div><!--/blog-twitter-->
<!-- End News -->
