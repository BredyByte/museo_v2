<head>
    <meta charset="utf-8">
    <title> @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">
    <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('images/fav.png') }}">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
    <script type="text/javascript">
        var correctCaptcha = function(response) {
            if (response.length > 0) {
                $('#contact-button').css('display', 'block');
            }
        };
    </script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118393434-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-118393434-1');
</script>

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

	<link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/museam_icons.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/style.css?v0.2') }}" rel="stylesheet" media="screen">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500&amp;subset=cyrillic" rel="stylesheet">
    
</head>