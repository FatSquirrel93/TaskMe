(function() {
    'use strict';

    app.factory('UserDataService', UserDataService);

    UserDataService.$inject = [ '$http', '$api', '$result' ];

    function UserDataService($http, $api, $result) {
        var service = {
           findAll: findAll
        };

        var entity = '/users/';

        return service;

        function findAll() {
            return $http.get($api + entity).then($result);
        }

    }
})();