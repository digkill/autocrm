'use strict';

angular.module('myApp.hire')

    .factory('Api', [
        '$http',
        function ($http) {

            var ROOT_URL = 'http://autocrm.loc/api/v1';

            function get(entity, id) {
                return $http.get(ROOT_URL + '/' + entity + '/' + id);
            }

            function getAll(entity) {
                return $http.get(ROOT_URL + '/' + entity + 's');
            }

            function post(entity, hire) {
                return $http.post(ROOT_URL + '/' + entity + 's', hire);
            }

            function put(entity, id, data) {
                return $http.put(ROOT_URL + '/' + entity + '/' + id, data);
            }

            function remove(entity, id) {
                return $http.delete(ROOT_URL + '/' + entity + '/' + id);
            }

            function getCarById(entity, id) {
                return $http.get(ROOT_URL + '/' + entity + 's/' + id + '/by/car');
            }

            function markAvgPoint(entity) {
                return $http.get(ROOT_URL + '/' + entity + 's/avgs/points/mark');
            }


            return {
                get: get,
                getAll: getAll,
                post: post,
                put: put,
                remove: remove,
                getCarById: getCarById,
                markAvgPoint: markAvgPoint
            }

        }
    ]);