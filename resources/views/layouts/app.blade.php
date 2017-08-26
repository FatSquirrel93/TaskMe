<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <base href="/"/>

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden" ng-app="TaskMeApp">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>
</header>

<div class="app-body" ng-controller="LayoutController">
    @include('partials/sidebar')

    <main class="main">
        <div class="container-fluid">

            <ng-view></ng-view>

        </div>
    </main>
</div>

<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('taskme/app/taskme.module.js') }}"></script>
<script src="{{ asset('taskme/app/taskme.routing.js') }}"></script>
<script src="{{ asset('taskme/app/taskme.config.js') }}"></script>

<script src="{{ asset('taskme/app/layout/LayoutController.js') }}"></script>

<!-- User related -->
<script src="{{ asset('taskme/app/user/service/UserDataService.js') }}"></script>
<script src="{{ asset('taskme/app/user/controller/UserListController.js') }}"></script>

</body>
</html>
