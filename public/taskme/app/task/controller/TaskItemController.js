(function () {
    'use strict';

    app.controller('TaskItemController', TaskItemController);
    TaskItemController.$inject = ['$scope', '$rootScope', 'TaskDataService', '$routeParams', '$translate', 'ngNotify'];
    function TaskItemController($scope, $rootScope, TaskDataService, $routeParams, $translate, ngNotify) {

        var vm = this;

        $scope.task = {};

        $scope.save = function() {
            return TaskDataService.save($scope.task).then(function (response) {
                $translate('TASK_CREATED_SUCCESS').then(function (text) {
                    ngNotify.set(text, 'success');
                    $rootScope.$broadcast('task:created');
                });
            }, vm.errorCallback);
        };

        vm.errorCallback = function (response) {
            $translate('TASK_CREATED_ERROR').then(function (text) {
                ngNotify.set(text, 'error');
            });
        };

        vm.getTaskFromParameter = function () {
            vm.projectId = $routeParams['id'];
            if (vm.projectId) {
                vm.findByProjectId();
            }
        };

        vm.findByProjectId = function (projectId) {
            TaskDataService.findById(vm.projectId).then(function (response) {
                console.log('loaded task', response);
                $scope.task = response;
            })
        };

        activate();

        function activate() {
            console.log('init TaskItemController');
            vm.getTaskFromParameter();
        }

    }

})();