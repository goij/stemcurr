<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

<!-- CSS Global Compulsory -->

{{HTML::Style('plugins/bootstrap/css/bootstrap.min.css')}}

{{HTML::Style("css/style.css")}}

<!-- CSS Implementing Plugins -->

{{HTML::Style("plugins/line-icons/line-icons.css")}}

{{HTML::Style("plugins/font-awesome/css/font-awesome.min.css")}}

<!-- CSS Theme -->

{{HTML::Style("css/theme-colors/blue.css")}}

<!-- Darken Theme -->

{{HTML::Style("css/theme-skins/dark.css")}}

<!-- CSS Customization -->

{{HTML::Style("css/custom.css")}}

@yield('styles')