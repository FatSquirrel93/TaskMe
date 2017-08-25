app.config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $routeProvider
        .when('/test', {
            templateUrl: '/taskme/views/test.html'
        })
        .otherwise({redirectTo: '/home'});

    $locationProvider.html5Mode(true);
}]);