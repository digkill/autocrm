'use strict';

angular.module('myApp.hire')

    .controller('updateController', [
        '$scope',
        'Api',
        '$window',
        '$routeParams',
        function($scope, Api, $window, $routeParams) {

        $scope.hire = {};

        Api.get($routeParams.id)
            .then(function (response) {
                console.log('response', response);
                $scope.hire = response.data;
            }, function (error) {
                console.log('error', error);
            });


        $scope.update = function (blogPost) {

            Api.put(hire.id, hire)
                .then(function (response) {
                    console.log('response', response);
                    $window.location.href = '#!list';
                }, function (error) {
                    console.log('error', error);
                });

        };
    }]);