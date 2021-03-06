<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AdminLTE 2 | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Styles Admin LTE -->

  <link rel="stylesheet" href="{{ asset('its-lte/css/its-admin.css') }}">
  <style>
    .navbar-nav.filter-languages span {
      font-size: small;
    }
    .navbar-nav.filter-languages a.act {
      border-bottom: solid 2px white;
      font-weight: bold;
    }
  </style>
  @stack('styles')
</head>
<body class="hold-transition skin-yellow-light sidebar-mini {{ session('lte_sidebar_collapse') ? 'sidebar-collapse' : '' }}">
    