app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $routeProvider
        .when('/test', {
            templateUrl: '/taskme/views/test.html'
        })
        .when('/user', {
            templateUrl: '/taskme/views/user/user-view.html'
        })
        .when('/project', {
            templateUrl: '/taskme/views/project/project-view.html'
        })
        .otherwise({redirectTo: '/dashboard'});

    $locationProvider.html5Mode(true);
}]);