(function () {
    'use strict';

    app.controller('LayoutController', LayoutController);
    LayoutController.$inject = ['$scope', '$location', 'ProjectDataService'];

    function LayoutController($scope, $location, ProjectDataService) {

        var vm = this;

        $scope.projects = [];

        $scope.isActive = function (viewLocation) {
            return viewLocation === $location.path();
        };

        function activate() {
            ProjectDataService.findAll().then(function (response) {
                $scope.projects = response;
            });
        }

        activate();

    }
})();