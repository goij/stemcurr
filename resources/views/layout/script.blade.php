<!-- JS Global Compulsory -->
{!!HTML::script("plugins/jquery/jquery.min.js")!!}
{!!HTML::script("plugins/jquery/jquery-migrate.min.js")!!}
{!!HTML::script("plugins/bootstrap/js/bootstrap.min.js")!!}
<!-- JS Implementing Plugins -->
{!!HTML::script("plugins/flexslider/jquery.flexslider-min.js")!!}
{!!HTML::script("plugins/back-to-top.js")!!}
<!-- JS Customization -->
{!!HTML::script("js/custom.js")!!}
<!-- JS Page Level -->
{!!HTML::script("js/app.js")!!}

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
    });
</script>
<!-- Buttons -->
{!!HTML::script("plugins/ladda-buttons/js/spin.min.js")!!}
{!!HTML::script("plugins/ladda-buttons/js/ladda.min.js")!!}
{!!HTML::script("js/plugins/ladda-buttons.js")!!}
{!!HTML::script("js/delete_request.js")!!}
@yield('scripts')
<!--[if lt IE 9]>
<script src=></script>
{!!HTML::script("plugins/respond.js")!!}
<script src=></script>
{!!HTML::script("plugins/html5shiv.js")!!}
<script src=></script>
{!!HTML::script("js/plugins/placeholder-IE-fixes.js")!!}
<![endif]-->