angular.module('phpApp').controller("removeCtrl", function ($scope, $http) {

    $http.get('api/init_scripts/drop.php').success(function (data) {
        $scope.data = data;
    });

});