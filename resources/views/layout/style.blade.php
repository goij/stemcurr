<!-- Favicon -->
<link rel="shortcut icon" href="{!!asset('img/favicon.ico')!!}">
<?php
$css_paths = [
        'plugins/bootstrap/css/bootstrap.min.css',
        'css/style.css',
        'plugins/line-icons/line-icons.css',
        'plugins/font-awesome/css/font-awesome.min.css',
        'css/theme-colors/dark-blue.css',
        'css/theme-skins/dark.css',
        'css/custom.css',
        'plugins/ladda-buttons/css/custom-lada-btn.css',
        'css/plugins/hover-effect/css/custom-hover-effects.css',
        'plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css'];
?>

@foreach($css_paths as $css)
    {!!HTML::Style($css)!!}
@endforeach

@yield('styles')