var app = angular.module('testeUTI', []);

app.controller('listarDados', function($scope, $http){
    $scope.dados = []; //declara uma array vazia com o nome 'dados'
    
    $http.get("assets/js/dados.json").success(function(response){
        $scope.dados = response;
    });
    
});