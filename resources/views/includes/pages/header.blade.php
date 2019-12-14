<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- App favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- App title -->
    <title>@yield('title')</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../plugins/morris/morris.css">

    <!-- App css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{asset('js/modernizr.min.js')}}"></script>
</head>