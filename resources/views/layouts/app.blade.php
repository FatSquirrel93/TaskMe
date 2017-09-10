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

    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">

    <base href="/"/>

</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden" ng-app="TaskMeApp">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">0</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="d-md-down-none">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="/logout" target="_self"><i class="fa fa-lock"></i> @{{ 'LOGOUT' | translate }}</a>
                <div class="dropdown-header text-center">
                    {{ App::VERSION() }}
                    {{ config('app.version') }}
                </div>
            </div>
        </li>
    </ul>
</header>

<div class="app-body" ng-controller="LayoutController">
    @include('partials/sidebar')

    <main class="main">
        <div class="container-fluid" ng-controller="ContentController">

            <ng-view></ng-view>

        </div>
    </main>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>

<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>

<script src="{{ asset('taskme/app/taskme.module.js') }}"></script>
<script src="{{ asset('taskme/app/taskme.routing.js') }}"></script>
<script src="{{ asset('taskme/app/taskme.config.js') }}"></script>

<script src="{{ asset('taskme/app/layout/LayoutController.js') }}"></script>
<script src="{{ asset('taskme/app/layout/ContentController.js') }}"></script>

<!-- Translations -->
<script src="{{ asset('taskme/translation/translation_de.js') }}"></script>
<script src="{{ asset('taskme/translation/translation_en.js') }}"></script>

<!-- User related -->
<script src="{{ asset('taskme/app/user/service/UserDataService.js') }}"></script>
<script src="{{ asset('taskme/app/user/controller/UserListController.js') }}"></script>

<!-- Project related -->
<script src="{{ asset('taskme/app/project/service/ProjectDataService.js') }}"></script>
<script src="{{ asset('taskme/app/project/controller/ProjectListController.js') }}"></script>
<script src="{{ asset('taskme/app/project/controller/ProjectItemController.js') }}"></script>

<!-- Task related -->
<script src="{{ asset('taskme/app/task/service/TaskDataService.js') }}"></script>
<script src="{{ asset('taskme/app/task/controller/TaskListController.js') }}"></script>
<script src="{{ asset('taskme/app/task/controller/TaskItemController.js') }}"></script>


</body>
</html>
