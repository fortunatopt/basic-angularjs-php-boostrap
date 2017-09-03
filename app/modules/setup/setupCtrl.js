
angular.module('phpApp').controller("setupCtrl", function ($scope, $http) {

    $http.get('api/init_scripts/setup.php').success(function (data) {
        $scope.data = data;
    });

});