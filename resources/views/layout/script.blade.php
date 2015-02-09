<!-- JS Global Compulsory -->
{!!HTML::script("plugins/jquery/jquery.min.js")!!}

{!!HTML::script("plugins/jquery/jquery-migrate.min.js")!!}

{!!HTML::script("plugins/bootstrap/js/bootstrap.min.js")!!}
<!-- JS Implementing Plugins -->

{!!HTML::script("plugins/back-to-top.js")!!}
<!-- JS Customization -->

{!!HTML::script("js/custom.js")!!}
<!-- JS Page Level -->

{!!HTML::script("js/app.js")!!}

<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
    });
</script>

@yield('scripts')

<!--[if lt IE 9]>
<script src=></script>
{!!HTML::script("plugins/respond.js")!!}
<script src=></script>
{!!HTML::script("plugins/html5shiv.js")!!}
<script src=></script>
{!!HTML::script("js/plugins/placeholder-IE-fixes.js")!!}
<![endif]-->