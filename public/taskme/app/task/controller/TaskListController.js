(function () {
    'use strict';

    app.controller('TaskListController', TaskListController);
    TaskListController.$inject = ['$scope', 'TaskDataService', '$routeParams'];
    function TaskListController($scope, TaskDataService, $routeParams) {

        var vm = this;

        $scope.tasks = [];

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