app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $routeProvider
        .when('/test', {
            templateUrl: '/taskme/views/test.html'
        })
        .otherwise({redirectTo: '/dashboard'});

    $locationProvider.html5Mode(true);
}]);