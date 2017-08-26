(function () {
    'use strict';

    app.controller('UserListController', UserListController);
    UserListController.$inject = ['$scope', 'UserDataService'];
    function UserListController($scope, UserDataService) {

        var vm = this;

        $scope.users = [];

        vm.findAll = function () {
            return UserDataService.findAll().then(function (response) {
                console.log('findAll returned', response);
                $scope.users = response;
            });
        };

        activate();

        function activate() {
            vm.findAll();
        }

    }

})();