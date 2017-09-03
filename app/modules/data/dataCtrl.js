angular.module('phpApp').controller("dataCtrl", function ($scope, $http){

    $http.get('api/people.php', { headers: { 'Cache-Control' : 'no-cache' } }).success(function(data) {
        $scope.people = data;
    });

});