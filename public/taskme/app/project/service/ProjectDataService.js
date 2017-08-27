(function() {
    'use strict';

    app.factory('ProjectDataService', ProjectDataService);

    ProjectDataService.$inject = [ '$http', '$api', '$result' ];

    function ProjectDataService($http, $api, $result) {
        var service = {
            findAll: findAll,
            findById: findById,
            save: save
        };

        var entity = '/projects/';

        return service;

        function findAll() {
            return $http.get($api + entity).then($result);
        }

        function findById(id) {
            return $http.get($api + entity + id).then($result);
        }

        function save(project) {
            if(project.id) {
                return $http.put($api + entity, project).then($result);
            }
            return $http.post($api + entity, project).then($result);
        }

    }
})();