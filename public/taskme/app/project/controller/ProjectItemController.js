(function () {
    'use strict';

    app.controller('ProjectItemController', ProjectItemController);
    ProjectItemController.$inject = ['$scope', 'ProjectDataService', '$routeParams'];
    function ProjectItemController($scope, ProjectDataService, $routeParams) {

        var vm = this;

        $scope.project = {};

        $scope.save = function() {
            return ProjectDataService.save($scope.project).then(function (response) {
                console.log('saving returned', response);
            }, vm.errorCallback);
        };

        vm.errorCallback = function (response) {
            console.log('errorCallback', response);
        };

        vm.getProjectFromParameter = function () {
            if ($routeParams['id']) {
                console.log('project id', $routeParams['id']);
                ProjectDataService.findById($routeParams['id']).then(function (response) {
                    console.log('loaded project', response);
                    $scope.project = response;
                })
            }
        };

        activate();

        function activate() {
            vm.getProjectFromParameter();
        }

    }

})();