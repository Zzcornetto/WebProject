<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script type="text/javascript">
    var saveInfo = angular.module("saveInfo", []);
    saveInfo.controller('PostController', function($scope, $http, $window){

    $scope.test = function(){
        alert('aland');
        return 'kalabunga';
    }
    
});




  </script>
</head>
<body>

  <div class="sub_div" ng-app="saveInfo" ng-controller="PostController">
    <div class="sub_item"><h2>Register</h2><br>  
        <input type="text" id="inputUsername" class="form-control" required placeholder="Username" autofocus ng-model=Username><br>
        <input type="password" id="inputPassword" class="form-control" required placeholder="Password" ng-model=Password><br>
        <input type="text" id="inputName" class="form-control" required placeholder="Name" ng-model=Name><br>
        <input type="text" id="inputEmail" class="form-control" required placeholder="E-mail" ng-model=Email><br>
        <input type="text" id="inputCredit" class="form-control" required placeholder="Credit Card" ng-model=Creditcard><br>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" ng-click="test()">Submit</button>

    </div>
  </div>
                
</body>
</html>