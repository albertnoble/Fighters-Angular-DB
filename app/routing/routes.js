app.config(function ($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "<h1>None</h1><p>The fighters Database</p>"
    })
    .when("/red", {
        templateUrl : "<h1>None</h1><p>The fighters Database</p>"
    })
    .when("/green", {
        templateUrl : "<h1>None</h1><p>The fighters Database</p>"
    })
    .otherwise({
        template : "<h1>None</h1><p>The fighters Database</p>"
    });
    
});