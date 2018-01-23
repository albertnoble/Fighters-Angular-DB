app.config(function($routeProvider) {
    $routeProvider.when("/", {
        templateUrl : "views/home.html",
    })
    .when("/fighters", {
        templateUrl : "views/fighters.html",
    })
    .when("/addFighter", {
        templateUrl : "views/AddFighter.html",
    })
    .when("/map", {
        templateUrl : "views/map.html",
    })
    .otherwise({redirectTo: "/"})
});