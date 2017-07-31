'use strict';

angular.module('myApp.hire')

    .controller('avgController', ['$scope', 'Api', '$filter',
        function ($scope, Api, $filter) {

            $scope.currentPage = 1;
            $scope.hires = [];
            $scope.pageSize = 5;

            Api.markAvgPoint('hire')
                .then(function (result) {
                    $scope.hires = result.data.hires;
                }, function (error) {
                    console.log('error', error);
                });



        }]);
