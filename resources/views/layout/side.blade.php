@yield('layout.side-custom')

<!-- User Specific Panels -->
<div class="headline">
    @if(!Auth::guest())
    <h3>Your Units</h3>
    <table class="table table-bordered cus-side-table">
        <tr>
            <th>Unit</th>
        </tr>
        {{-- Generate links --}}

        @foreach(Auth::user()->units as $unit)
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

        @foreach(Auth::user()->units as $unit)
            @foreach($unit->topics() as $topic)
                <tr>
                    <td>
                        {!!$topic->id!!}
                    </td>
                    <td>
                        <a href="{!! route('topic') . '/' . $topic->id!!}">{!!$topic->title!!}</a>
                    </td>
                </tr>
            @endforeach
        @endforeach
    </table>
    @endif
</div>

<!-- End user specific panels -->

<!-- Choose Us -->
<div class="who margin-bottom-30">
    <div class="headline"><h3>Quick Links</h3></div>
    <p>Put some links for easy navigation here.</p>
    <ul class="list-unstyled">
        <li><a href="{!!route('about')!!}"><i class="fa fa-desktop"></i>About</a></li>
        <li><a href="{!!route('topic')!!}"><i class="fa fa-bullhorn"></i>Browse Topics</a></li>
        @if(Auth::guest())
            <li><a href="{!!route('login')!!}"><i class="fa fa-globe"></i>Log In</a></li>
            <li><a href="{!!route('register')!!}"><i class="fa fa-globe"></i>Register</a></li>
        @endif
    </ul>
</div><!--/who-->
<!-- End Choose Us -->

<!-- News -->
<div class="blog-twitter">
    <div class="headline"><h3>Latest News</h3></div>
    @foreach(App\News::all() as $article)
        <li class="list-unstyled">
            <div class="headline"><h4><a href="{!!route('news')!!}/{!!$article->id!!}">{!!$article->title!!}</a></h4>
            </div>
            <div>
                {!!$article->text!!}
            </div>
            <br>

            <div class="footer">
                <span style="font-weight: bold">{!!$article->user->name!!} at {!!$article->updated_at!!}</span>
            </div>
        </li>
    @endforeach
</div>
<!-- End News -->
