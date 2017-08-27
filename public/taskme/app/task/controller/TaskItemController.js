(function () {
    'use strict';

    app.controller('TaskItemController', TaskItemController);
    TaskItemController.$inject = ['$scope', 'TaskDataService', '$routeParams'];
    function TaskItemController($scope, TaskDataService, $routeParams) {

        var vm = this;

        $scope.task = {};

        $scope.save = function() {
            return TaskDataService.save($scope.task).then(function (response) {
                console.log('saving returned', response);
            }, vm.errorCallback);
        };

        vm.errorCallback = function (response) {
            console.log('errorCallback', response);
        };

        vm.getTaskFromParameter = function () {
            if ($routeParams['id']) {
                console.log('task id', $routeParams['id']);
                TaskDataService.findById($routeParams['id']).then(function (response) {
                    console.log('loaded task', response);
                    $scope.task = response;
                })
            }
        };

        activate();

        function activate() {
            console.log('init TaskItemController');
            vm.getTaskFromParameter();
        }

    }

})();