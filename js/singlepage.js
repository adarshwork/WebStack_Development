angular.module('myapp',['ngRoute'])
.config(function($routeProvider){
    $routeProvider
    .when('/',
    {
        templateUrl:'about.html'
    })
    .when('/contact', 
    { 
        templateUrl:'contact.html' 
    }) 
    .otherwise({redirectTo: '/'}); 
})
.controller('mainController',function()
{
})

