(function () {
    'use strict';

    app.controller('ProjectItemController', ProjectItemController);
    ProjectItemController.$inject = ['$scope', '$rootScope', 'ProjectDataService', '$routeParams', '$translate', 'ngNotify'];
    function ProjectItemController($scope, $rootScope, ProjectDataService, $routeParams, $translate, ngNotify) {

        var vm = this;

        $scope.project = {};

        $scope.save = function () {
            function errorCallback(response) {
                $translate('PROJECT_UPDATE_ERROR').then(function (text) {
                    ngNotify.set(text, 'error');
                });
            }

            function successCallback(response) {
                $translate('PROJECT_UPDATE_SUCCESS').then(function (text) {
                    ngNotify.set(text, 'success');
                    $rootScope.$broadcast('project:updated');
                    vm.hideProjectModal();
                    $scope.project = response;
                });
            }

            ProjectDataService.save($scope.editProject).then(successCallback, errorCallback);
        };

        $scope.new = function () {
            $scope.editProject = {};
        };

        $scope.edit = function () {
            $scope.editProject = angular.copy($scope.project);
        };

        vm.getProjectFromParameter = function () {
            if ($routeParams['projectId']) {
                ProjectDataService.findById($routeParams['projectId']).then(function (response) {
                    $scope.project = response;
                })
            }
        };

        activate();

        function activate() {
            console.log('init ProjectItemController');
            vm.getProjectFromParameter();
        }

        vm.hideProjectModal = function () {
            $('#project-edit-modal').modal('hide');
        };

        vm.showProjectModal = function () {
            $('#project-edit-modal').modal('show');
        };

    }

})();