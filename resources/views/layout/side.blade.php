@yield('layout.side-custom')

<!-- User Specific Panels -->
<div class="headline">
    <h3>Lessons</h3>
    <table class="table table-bordered cus-side-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        {{-- Generate links --}}
        <?php
        use App\Lesson;
        $lessons = Lesson::all()->take(5);?>
        @foreach($lessons as $lesson)
            <tr>
                <td>
                    {!!$lesson->id!!}
                </td>
                <td>
                    <a href="#">{!!$lesson->title!!}</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

<div class="headline">
    <h3>Themes</h3>
    <table class="table table-bordered cus-side-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </table>
</div>

<!-- End user specific panels -->
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
        <li><a href="{!!route('about')!!}"><i class="fa fa-desktop"></i>About</a></li>
        <li><a href="{!!route('lesson')!!}"><i class="fa fa-bullhorn"></i>Browse Lessons</a></li>
        <li><a href="{!!route('login')!!}"><i class="fa fa-globe"></i>Log In</a></li>
    </ul>
</div><!--/who-->
<!-- End Choose Us -->

<!-- News -->
<div class="blog-twitter">
    <div class="headline"><h3>Latest News</h3></div>
    @foreach(range(0,3) as $num)
        <li class="list-unstyled">
            <a href="#"><strong>News Article {!!$num!!}</strong></a>
            <p>News article {!!$num!!} text.News article {!!$num!!} text.News article {!!$num!!} text.News article {!!$num!!} text.News article {!!$num!!} text....</p>
        </li>
    @endforeach
</div>
</div><!--/blog-twitter-->
<!-- End News -->
