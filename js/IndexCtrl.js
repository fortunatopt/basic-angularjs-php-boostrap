phpApp.controller('IndexCtrl', function ($scope, $http){

    $http.get('api/people.php').success(function(data) {
        $scope.people = data;
    });
    
});