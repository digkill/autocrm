'use strict';

angular.module('myApp.hire')

    .controller('updateController', [
        '$scope',
        'Api',
        '$window',
        '$routeParams',
        function ($scope, Api, $window, $routeParams) {

            $scope.hire = {};
            $scope.data = {};


            Api.get('hires', $routeParams.id)
                .then(function (response) {
                    console.log('response', response);
                    $scope.hire = response.data;

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

                    Api.getAll('car')
                        .then(function (result) {
                            $scope.data.cars = result.data.cars;
                        }, function (error) {
                            console.log('error', error);
                        });

                }, function (error) {
                    console.log('error', error);
                });


            $scope.update = function (hire) {

                Api.put('hire', hire.id, hire)
                    .then(function (response) {

                        console.log('response', response);

                        $window.location.href = '#!list';
                    }, function (error) {
                        console.log('error', error);
                    });

            };
        }]);