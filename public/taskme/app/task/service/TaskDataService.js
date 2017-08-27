(function() {
    'use strict';

    app.factory('TaskDataService', TaskDataService);

    TaskDataService.$inject = [ '$http', '$api', '$result' ];

    function TaskDataService($http, $api, $result) {
        var service = {
            findAll: findAll,
            findById: findById,
            findByProjectId: findByProjectId,
            save: save
        };

        var entity = '/tasks/';

        return service;

        function findAll() {
            return $http.get($api + entity).then($result);
        }

        function findById(id) {
            return $http.get($api + entity + id).then($result);
        }

        function findByProjectId(id) {
            return $http.get($api + entity + 'project/' + id).then($result);
        }

        function save(task) {
            if(task.id) {
                return $http.put($api + entity, task).then($result);
            }
            return $http.post($api + entity, task).then($result);
        }

    }
})();