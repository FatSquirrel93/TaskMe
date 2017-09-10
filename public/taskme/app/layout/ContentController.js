(function () {
    'use strict';

    app.controller('ContentController', ContentController);
    ContentController.$inject = ['$scope', '$location'];

    function ContentController($scope, $template) {

        var vm = this;

        /* set global ng-include template urls from app.config.js */
        $scope.templates =
            {
                project: {
                    projectEditModal: '/taskme/views/project/project-edit-modal.html'
                },
                task: {
                    taskProjectTable: '/taskme/views/task/task-project-table.html',
                    taskEditModal: '/taskme/views/task/task-edit-modal.html'
                }

            };

    }
})();