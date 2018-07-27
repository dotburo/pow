<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="data:;base64,iVBORw0KGgo=">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <meta name="author" content="">
    <meta name="description" content="">
    @php wp_head() @endphp
    <title>Pow</title>
    @yield('styles')
</head>
<body>
<div id="site">
    <div id="site-wrap">
        @yield('content')
    </div>
</div>
@php wp_footer() @endphp
@yield('scripts')
</body>
</html>