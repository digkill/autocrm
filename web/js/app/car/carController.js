'use strict';

angular.module('myApp.hire')

    .controller('carController', ['$scope', 'Api', '$filter', '$routeParams',
        function ($scope, Api, $filter, $routeParams) {
            $scope.currentPage = 1;
            $scope.hires = [];
            $scope.pageSize = 5;
            Api.getCarById('hire', $routeParams.id)
                .then(function (result) {

                    $scope.hires = result.data.hires;
                }, function (error) {
                    console.log('error', error);
                });

        }]);
