@yield('layout.side-custom','No Custom!')

<!-- User Specific Panels -->
<div class="headline">
    <h3>Your Lesson Plans</h3>
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
    <p>Pellentesque fermentum, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id.</p>
    <ul class="list-unstyled">
        <li><a href="#"><i class="fa fa-desktop"></i>Vivamus imperdiet condimentum</a></li>
        <li><a href="#"><i class="fa fa-bullhorn"></i>Anim pariatur cliche squid</a></li>
        <li><a href="#"><i class="fa fa-globe"></i>Eget placerat felis consectetur</a></li>
        <li><a href="#"><i class="fa fa-group"></i>Condimentum diam eget placerat</a></li>
    </ul>
</div><!--/who-->
<!-- End Choose Us -->

<!-- News -->
<div class="blog-twitter">
    <div class="headline"><h3>Latest News</h3></div>
    <div class="blog-twitter-inner">
        <i class="icon-twitter"></i>
        <a href="#">@auroraedu</a>
        A sample news article/blog post
        <span class="twitter-time">5 days ago</span>
    </div>
</div><!--/blog-twitter-->
<!-- End News -->
