@yield('layout.side-custom')

<!-- User Specific Panels -->
<div class="headline">
    <h3>Your Units</h3>
    <table class="table table-bordered cus-side-table">
        <tr>
            <th>Unit</th>
        </tr>
        {{-- Generate links --}}
        <?php
        use App\Unit;?>
        @foreach(Unit::all() as $unit)
            <tr>
                <td>
                    <a href="{!! route('unit') . '/' . $unit->id!!}">Grade {!!$unit->grade->number!!} -
                        {!!$unit->subject->name!!}</a>
                </td>
            </tr>
        @endforeach
    </table>
    <h3>Your Topics</h3>
    <table class="table table-bordered cus-side-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        {{-- Generate links --}}
        <?php
        use App\Topic;?>
        @foreach(Topic::all() as $topic)
            <tr>
                <td>
                    {!!$topic->id!!}
                </td>
                <td>
                    <a href="{!! route('topic') . '/' . $topic->id!!}">{!!$topic->title!!}</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>

<!-- End user specific panels -->

<!-- Choose Us -->
<div class="who margin-bottom-30">
    <div class="headline"><h3>Quick Links</h3></div>
    <p>Put some links for easy navigation here.</p>
    <ul class="list-unstyled">
        <li><a href="{!!route('about')!!}"><i class="fa fa-desktop"></i>About</a></li>
        <li><a href="{!!route('topic')!!}"><i class="fa fa-bullhorn"></i>Browse Topics</a></li>
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

            <p>News article {!!$num!!} text.News article {!!$num!!} text.News article {!!$num!!} text.News article
                {!!$num!!} text.News article {!!$num!!} text....</p>
        </li>
    @endforeach
</div>
</div><!--/blog-twitter-->
<!-- End News -->
