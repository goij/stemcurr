<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>STEM Curriculum</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('layout.style')
</head>

<body class='dark'>
<div class="wrapper">

    @include('layout.header')


    <!--=== Content Part ===-->
    @yield('content','<h1>No Content</h1>')
    <!-- End Content Part -->

    @include('layout.footer')


</div><!--/wrapper-->
    @include('layout.script')
</body>
</html>