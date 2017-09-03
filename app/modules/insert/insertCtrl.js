angular.module('phpApp').controller("insertCtrl", function ($scope, $http) {

    $http.get('api/init_scripts/addRecords.php').success(function (data) {
        $scope.data = data;
    });

});