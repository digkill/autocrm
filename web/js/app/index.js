'use strict';

angular.module('myApp.hire', ['ngRoute'])

    .config(['$routeProvider', function($routeProvider) {

        $routeProvider
            .when('/list', {
                templateUrl: '/js/app/list/list.html',
                controller: 'listController'
            })
            .when('/create', {
                templateUrl: '/js/app/create/create.html',
                controller: 'createController'
            })
            .when('/update/:id', {
                templateUrl: '/js/app/update/update.html',
                controller: 'updateController'
            })
            .when('/car/:id', {
                templateUrl: '/js/app/car/car.html',
                controller: 'carController'
            })
        ;

    }]);