app.controller('MainController', ['$scope', function($scope) {
  $scope.jobt = 'Mark traMOOC';
  $scope.intructions1 = 'You will presented with one sentence in English and an  indicative translation in Greek.';
  $scope.instructions2 = 'Mark up the faults based on the rules below:';
  $scope.bullet1 = 'Not translated parts (EXAMPLE)';
  $scope.bullet2 = 'Grammatical Issues (EXAMPLE)';
  $scope.card_title = 'Mark words to enable the popup';
  $scope.date = new Date();
  $scope.Languages  = ['English', 'Greek'];
}]);
