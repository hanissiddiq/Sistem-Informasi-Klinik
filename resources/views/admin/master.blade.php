<!DOCTYPE html>
<html lang="en">
{{-- ====================script hanis==================== --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('preclinic/assets/img/favicon.png') }}">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('preclinic/assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('preclinic/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('preclinic/assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('preclinic/assets/css/select2.min.css') }}">

    <!-- Datatables CSS -->
    <link rel="stylesheet" href="{{ asset('preclinic/assets/plugins/datatables/datatables.min.css') }}">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="{{ asset('preclinic/assets/css/feather.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('preclinic/assets/css/style.css') }}">

    {{-- @include('admin.body.styles') --}}
</head>



<body class="hold-transition sidebar-mini layout-fixed">


    {{-- <div class="wrapper"> --}}
    <div class="main-wrapper">
        <!-- header -->
        @include('admin.body.header')
        <!-- /.header -->

        {{-- <!-- Navbar -->
  @include('admin.body.navbar')
  <!-- /.navbar --> --}}

        <!-- Main Sidebar Container -->
        @include('admin.body.sidebar')

        {{-- <div class="page-wrapper">
    <d class="content"> --}}
        <div class="page-wrapper">
            <div class="content">
                @yield('content')
            </div>
        </div>



        <div class="sidebar-overlay" data-reff=""></div>
    </div>

    @include('admin.body.scripts')
</body>

</html>
