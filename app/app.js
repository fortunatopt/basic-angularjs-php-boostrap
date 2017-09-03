//'use strict';

//angular.module("phpApp", ['ngSanitize', 'ngRoute']);






'use strict';

angular.module("phpApp", [
    'ngSanitize',
    'ngRoute']).run(["$rootScope", "$templateCache", "$window", "$location", "$routeParams", function ($rootScope, $templateCache, $window, $location, $routeParams) {

        $rootScope.$on('$routeChangeStart', function () {
            //console.log('$routeChangeStart');
            $templateCache.removeAll();

        });

        $rootScope.$on('$viewContentLoaded', function() {
            //console.log('$viewContentLoaded');
            $templateCache.removeAll();
        
        });

    }]);
