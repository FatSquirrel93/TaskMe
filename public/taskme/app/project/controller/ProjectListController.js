(function () {
    'use strict';

    app.controller('ProjectListController', ProjectListController);
    ProjectListController.$inject = ['$scope', 'ProjectDataService'];
    function ProjectListController($scope, ProjectDataService) {

        var vm = this;

        $scope.projects = [];

        vm.findAll = function () {
            return ProjectDataService.findAll().then(function (response) {
                console.log('findAll returned', response);
                $scope.projects = response;
            });
        };

        activate();

        function activate() {
            vm.findAll();
        }

    }

})();