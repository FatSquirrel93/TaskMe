(function () {
    'use strict';

    app.controller('ContentController', ContentController);
    ContentController.$inject = ['$scope', '$location', '$template'];

    function ContentController($scope, $template) {

        var vm = this;

        /* set global ng-include template urls from app.config.js */
        $scope.templates = $template;

        $scope.test = '/taskme/views/project/project-edit-modal.html';

    }
})();