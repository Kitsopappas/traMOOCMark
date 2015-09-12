app.controller('MainController', ['$scope','$http', function($scope, $http) {

  $scope.jobt = 'Mark traMOOC';
  $scope.intructions1 = 'You will presented with one sentence in English and an  indicative translation in Greek.';
  $scope.instructions2 = 'Mark up the faults based on the rules below:';
  $scope.bullet1 = 'Not translated parts (EXAMPLE)';
  $scope.bullet2 = 'Grammatical Issues (EXAMPLE)';
  $scope.card_title = 'Mark words to enable the popup';
  $scope.date = new Date();
  $scope.Languages  = ['English', 'Greek'];

  $http.get("http://46.101.157.57/mark/api/sentences.php")
  //http://www.w3schools.com/angular/customers_mysql.php
  .success(function (response) {
    $scope.names = response.records;
  });

}]);
