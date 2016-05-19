<?php

session_start();

if (isset($_SESSION["checklogin2"]) ){
	//echo $_SESSION["checklogin2"];
	$user=$_SESSION["checklogin2"];
		?>
		<style type="text/css">#login{
			display:none;
			}
		</style>
<?php
	}
else{
	?>
		<style type="text/css">#logout{
			display:none;
			}
		#user{
			display:none;
		}
		</style>
<?php
}

?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Register Page</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src="md5.min.js"></script>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style >
			.center_div {
				text-align: center;
				border:10px solid gray;
				border-radius: 10px;
				margin-top: 1%;
				margin-left: 10%;
				margin-right:10%;
				padding: 1%;
				font-size: 300%;
			}


			.login{
				    margin: auto;
    				width: 80%;   					
    				padding: 10px;
    				color: blue;
			}

			.sub_div{
				text-align: center;
				border:5px solid gray;
				border-radius: 10px;
				margin-top: 1%;
				margin-left: 20%;
				margin-right: 20%;
				padding: 1%;
				font-size: 100%;
				overflow: auto;
			}

			.sub_item{
				max-width: 500px;
				margin: auto;
				padding-bottom: 3%;
			}
		</style>

  		<script type="text/javascript">
    		var saveInfo = angular.module("saveInfo", []);
			saveInfo.controller('PostController', function($scope, $http, $window){
			
		$scope.submit = function(){
			var encodedpass =md5(encodeURIComponent($scope.Password))
	        $http.post('sending.php?action=info',
	                {
	                    'Username'     : $scope.Username, 
	                    'Password'    : encodedpass, 
	                    'Name' : $scope.Name, 
	                    'Email' : $scope.Email, 
	                    'Creditcard': $scope.Creditcard, 
	                }
	            )
	            .success(function (data, status, headers, config) {
	              alert("Product has been Submitted Successfully"); 
	            })

	            .error(function(data, status, headers, config){
	               
	            });
	    }

	    		    $scope.test = function(){
        		alert('aland');
       			return 'kalabunga';
    		}


  			$scope.test = function(){
        			alert('aland');
        			return 'kalabunga';
    				}
		});



	</script>

	

	</head>
	<body >
	<div class="center_div" onclick="location.href='main.php';">
				<p>AroundMU</p>
	</div>

	<div id="actionlist" align="right" class="login" >
		<div id="user">
		<?php
			echo "hi, ".$_SESSION["checklogin2"];
		?>	  	
		</div>
		<a href="login.php" id="login" >login</a>
		<a href="logout.php" id="logout">logout</a>
		<a href="register.php">register</a>
	</div>

	<div class="sub_div" ng-app="saveInfo" ng-controller="PostController">
		<div class="sub_item"><h2>Register</h2><br>  
				<input type="text" id="inputUsername" class="form-control" required placeholder="Username" autofocus ng-model=Username><br>
				<input type="password" id="inputPassword" class="form-control" required placeholder="Password" ng-model=Password><br>
				<input type="text" id="inputName" class="form-control" required placeholder="Name" ng-model=Name><br>
				<input type="text" id="inputEmail" class="form-control" required placeholder="E-mail" ng-model=Email><br>
				<input type="text" id="inputCredit" class="form-control" required placeholder="Credit Card" ng-model=Creditcard><br>
				
				<button class="btn btn-lg btn-primary btn-block" type="submit" ng-click="submit()">Submit</button>

		</div>
	</div>
				

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	</body>
</html>