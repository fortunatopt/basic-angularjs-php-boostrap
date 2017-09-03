angular.module('phpApp').controller("deleteCtrl", function ($scope, $http) {

    $http.get('api/init_scripts/deleteRecords.php').success(function (data) {
        $scope.data = data;
    });

});