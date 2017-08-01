'use strict';

angular.module('myApp.hire', ['ngRoute', '720kb.datepicker'])

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
            .when('/avg', {
                templateUrl: '/js/app/avg/avg.html',
                controller: 'avgController'
            })
        ;

    }]);