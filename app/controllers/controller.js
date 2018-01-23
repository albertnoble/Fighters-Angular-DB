

app.controller("myCtrl", function($scope, $http) {
    $http.get("connectDB.php")
    .then(function (response) {$scope.names = response.data.records;});
});