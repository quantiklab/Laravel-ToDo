<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo App</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/style.css') !!}
    <link rel="stylesheet" href="/css/libs.css">
</head>
<body>
@include('partials.navbar')

<div class="container">
    @yield('content')
</div>

@include('partials.footer')

{!! Html::script('js/jquery.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
{!! Html::script('js/script.js') !!}
<script src="/js/libs.js"></script>
@include('partials.message')
</body>
</html>