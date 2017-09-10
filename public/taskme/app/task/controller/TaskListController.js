(function () {
    'use strict';

    app.controller('TaskListController', TaskListController);
    TaskListController.$inject = ['$scope', 'TaskDataService', '$routeParams', '$rootScope'];
    function TaskListController($scope, TaskDataService, $routeParams, $rootScope) {

        var vm = this;

        $scope.tasks = [];

        $scope.$on('task:created', function () {
           vm.findAll();
        });

        vm.findAll = function () {
            if ($routeParams['projectId']) {
                TaskDataService.findByProjectId($routeParams['projectId']).then(function (response) {
                    $scope.tasks = response;
                })
            }
        };

        activate();

        function activate() {
            vm.findAll();
        }

    }

})();