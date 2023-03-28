<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <title>Ladep / Laravel Deployer</title>

    <!-- Bootstrap -->
    <link href="/components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" ladep="1" />
    <link href="/css/style.css" rel="stylesheet" ladep="1" />

    <script type="text/javascript" src="/components/jquery/dist/jquery.js" ladep="1"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!--
    <script type="text/javascript" src="/components/bootstrap/dist/js/bootstrap.js" ladep="0"></script>
    -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--
    <script type="text/javascript" src="/components/html5shiv/dist/html5shiv.js" ladep="0"></script>
    <script type="text/javascript" src="/components/respond/src/respond.js" ladep="0"></script>
    -->
    <![endif]-->

    <!--
    <script type="text/javascript" src="/components/angular/angular.js" ladep="0"></script>
    -->
</head>
<body>

<a name="top"></a>

<div class="container-fluid">
    <div class="row header">
        @if ( '/' != $uri && '' != $uri )
        <div class="hback">
            <a href="/" class="wlink"><img src="/images/nav_back.png" border="0"/></a>
        </div>
        @else
        <div class="logo">
            <a href="/">
                <img src="/images/rocketship_icon_ladep_text.png" />
            </a>
        </div>
        @endif
        <div class="hcnt text-right">
            <a href="/#sourcecode" class="wlink">Source Code</a>
            <a href="/docs" class="wlink">Documentation</a>
        </div>
        <div class="hmenu nav-menu-icon text-right">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>

<div class="container-fluid roundtop" style="height: 5px;"></div>