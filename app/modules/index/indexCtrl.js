angular.module('phpApp').controller("indexCtrl", function ($scope, $http){
    $scope.data = "This is the main page. From here you can use the menus above to do various things such as View data, setup the app, and remove the app.";

    $http.get('api/people.php', { headers: { 'Cache-Control' : 'no-cache' } }).success(function(data) {
        $scope.people = data;
    });
    
});