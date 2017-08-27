(function () {
    'use strict';

    app.controller('TaskListController', TaskListController);
    TaskListController.$inject = ['$scope', 'TaskDataService', '$routeParams'];
    function TaskListController($scope, TaskDataService, $routeParams) {

        var vm = this;

        $scope.tasks = [];

        vm.findAll = function () {
            if ($routeParams['id']) {
                console.log('task id', $routeParams['id']);
                TaskDataService.findByProjectId($routeParams['id']).then(function (response) {
                    console.log('loaded task', response);
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