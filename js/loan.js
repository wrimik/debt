var app = angular.module('app', []);

app.config(function ($interpolateProvider) {
    $interpolateProvider.startSymbol('{!').endSymbol('!}'); //see below
});

app.controller('indexController',
    ['$scope', function ($scope) {
        $scope.ui = {
            action: '/process.php' + window.location.search,
            step: 1
        };
        $scope.ui.next = function () {
            if($scope.valid()){
                if($scope.ui.step < 8){
                    $scope.ui.step++;
                }
            }
        };
        /**
         * triggers the validation of the current form.
         * either valid and form continues, or invalid and errors show
         * @returns {*}
         */
        $scope.valid = function(){
            var form = $scope.form[ 'form' + $scope.ui.step]; // form1, form2, etc
            form.$setSubmitted(true);
            return form.$valid;
        };
        $scope.terms = function () {
            window.open('/terms-and-conditions.html', '', 'scrollbars=yes,width=600,height=350')
        };
    }]);


app.directive('formScreen', function () {
    return {
        restrict: 'E',
        transclude: true,
        templateUrl: '/steps/template.html',
        scope: {
            step: '@step',
            ui: '=',
            fields: '=',
            title: '@title',
            subtitle: '@subtitle'
        }
    }
});