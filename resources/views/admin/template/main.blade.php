<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Default')|Panel de administracion</title>
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
<div class="col-md-8 col-md-offset-2">
    @include('admin/template/partials/nav')

    <section>
        <div class="panel panel-default">
            <div class="panel-heading">
                @yield('title','Default')
            </div>
            <div class="panel-body">
                @include('flash::message')
                @include('admin.template.partials.errors')
                @yield('content')
            </div>
        </div>

    </section>


    <footer class="panel">

    </footer>

</div>
<script src="{{asset('plugins/jquery/js/jquery.js')}}"></script>

<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>