(function () {
    'use strict';

    app.controller('ProjectItemController', ProjectItemController);
    ProjectItemController.$inject = ['$scope', 'ProjectDataService'];
    function ProjectItemController($scope, ProjectDataService) {

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

        activate();

        function activate() {
        }

    }

})();