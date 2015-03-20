<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>STEM Curriculum</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @include('layout.style')
</head>

<body class="">
<div class="wrapper" style="background-color:#ffffff">

    @include('layout.header')


    <div class="container content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(Session::has('message'))
            <div class="alert alert-success">
                <strong>Success! {!!Session::get('message')!!}</strong>
            </div>
        @endif
        <div class="row">
            <!--=== Start Left Content - 9 Columns ===-->
            <div class="col-sm-9">
                @yield('content','<h1>No Content</h1>')
            </div>
            <!-- End Content Part -->
            <!--=== Start Side Section - 3 Columns ===-->
            <div class="col-sm-3">
                @include('layout.side')
            </div>
            <!-- End Side Section -->
        </div>
    </div>

    @include('layout.footer')


</div>
<!--/wrapper-->
@include('layout.script')
</body>
</html>