'use strict';

angular.module('myApp.hire')

    .controller('listController', ['$scope', 'Api', '$filter',
        function ($scope, Api, $filter) {

            $scope.currentPage = 1;
            $scope.hires = [];
            $scope.pageSize = 5;


            Api.getAll('hire')
                .then(function (result) {
                    console.log('result', result);

                    $scope.hires = result.data.hires;




                    console.log($scope.hires);

                }, function (error) {
                    console.log('error', error);
                });


            $scope.remove = function (id) {

                var entity = 'hire';

                Api.remove(entity, id)
                    .then(function (result) {
                        $scope.hires = $filter('filter')($scope.hires, function (value, index, array) {
                            return value.id !== id;
                        });
                    }, function (error) {
                        console.log('error', error);
                    });
            }

        }]);
