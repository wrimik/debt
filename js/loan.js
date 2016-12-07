var app = angular.module('app', []);

app.config(function ($interpolateProvider) {
        $interpolateProvider.startSymbol('{!').endSymbol('!}'); //see below
    })
    .directive('inputError', function () {
        /**
         * simplifies the display errors for form fields
         */
        return {
            templateUrl: partial('framework/input-error.html'),
            scope: {
                step: '=',
                form: '=',
                fieldname: '@',
                message: '@'
            },
            controller: function ($scope) {
                $scope.field = $scope.form[$scope.fieldname];
            }
        }
    });


app.controller('indexController',
    ['$scope', function ($scope) {
        $scope.ui = {
            step: 1
        };
    }]);


    app.directive('formScreen', function () {
    return {
        restrict: 'E', // this allows restriction of blink to an HTML element.
        transclude: true, // transclusion instructs angular to embed the original content from the DOM into the resultant output
        templateUrl: '/steps/template.html', // This is the template that will replace the <blink> tag. The ng-transclude indicates what element should be blended.
        scope:{
            step: '@step',
            ui: '=',
            title: '@title',
            subtitle: '@subtitle'
        }
    }
});