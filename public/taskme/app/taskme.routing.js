app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $routeProvider
        .when('/test', {
            templateUrl: '/taskme/views/test.html'
        })
        .when('/admin/user', {
            templateUrl: '/taskme/views/user/user-view.html'
        })
        .when('/admin/project', {
            templateUrl: '/taskme/views/project/admin-project-view.html'
        })
        .when('/project/:projectId', {
            templateUrl: '/taskme/views/project/project-view.html'
        })
        .otherwise({redirectTo: '/dashboard'});

    $locationProvider.html5Mode(true);
}]);