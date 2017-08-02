'use strict';

angular.module('myApp.hire')

    .controller('createController', ['$scope', 'Api', '$window', function($scope, Api, $window) {

        $scope.hire = {};
        $scope.model = {};

        $scope.data = {

        };

        Api.getAll('car')
            .then(function (result) {
                $scope.data.cars = result.data.cars;
            }, function (error) {
                console.log('error', error);
            });

        Api.getAll('point')
            .then(function (result) {
                $scope.data.points = result.data.points;
            }, function (error) {
                console.log('error', error);
            });

        Api.getAll('customer')
            .then(function (result) {
                $scope.data.customers = result.data.customers;
            }, function (error) {
                console.log('error', error);
            });

        Api.getAll('worker')
            .then(function (result) {
                $scope.data.workers = result.data.workers;
            }, function (error) {
                console.log('error', error);
            });

        $scope.create = function (hire) {

            Api.post('hire', hire)
                .then(function (result) {
                    console.log('result', result);
                    $window.location.href = '#!list';
                }, function (error) {
                    console.log('error', error);
                })
        };
    }]);