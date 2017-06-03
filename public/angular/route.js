// 1. membuat module dengan nama uclc
var app = angular.module("uclc", [
    // "ui.bootstrap",
    "ui.router",
    "oc.lazyLoad",
    "common.services"]);

app.config([
    '$stateProvider', '$urlRouterProvider',
    function($stateProvider, $urlRouterProvider) {
        
        $stateProvider
            .state('test', {
                url: '/test',
                templateUrl: '/angular/partialviews/test.html'
            })
           
    }
]);