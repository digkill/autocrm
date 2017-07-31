'use strict';

angular.module('myApp.hire')

    .controller('listController', ['$scope', 'Api', '$filter',
        function ($scope, Api, $filter) {

            $scope.currentPage = 1;
            $scope.hires = [];

            Api.getAll('hire')
                .then(function (result) {
                    console.log('result', result);

                    $scope.hires = result.data.hires;

                    $scope.pageSize = 5;

                    console.log($scope.hires);

                }, function (error) {
                    console.log('error', error);
                });


            $scope.remove = function (id) {
                Api.remove(id)
                    .then(function (result) {
                        console.log('result', result);
                        $scope.hire = $filter('filter')($scope.hire, function (value, index, array) {
                            return value.id !== id;
                        });
                        //$scope.blogPosts = result.data;
                    }, function (error) {
                        console.log('error', error);
                    });
            }

        }]);
