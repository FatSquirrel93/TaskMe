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

    }

})();