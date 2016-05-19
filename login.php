<?php  

	print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login Form</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			.login-form {
				max-width: 300px;
				margin: 0 auto;
			}
			#inputUsername {
				margin-bottom: 5px;
			}
			#inputPassword {
				margin-bottom: 5px;
			}
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
				padding-bottom: 1%;			
			}
		</style>
	</head>
	<body ng-app="postExample" ng-controller='PostController as postCtrl'>
	<div class="center_div" onclick="location.href='main.php';">
				<p>AroundMU</p>
	</div><br>
		<div class="container-fluid sub_div">
			<form class="login-form" ng-submit="postCtrl.postForm()">
				<h2>Please Sign-in</h2>
				<label for="inputUsername">Username</label>
				<input type="text" id="inputUsername" class="form-control" required placeholder="Username" autofocus ng-model=postCtrl.inputData.username>
				<label for="inputPasword">Pasword</label>
				<input type="password" id="inputPassword" class="form-control" required placeholder="Password" ng-model=postCtrl.inputData.password>
				<br> 
				<div class="alert alert-danger" role="aleart" ng-show="errorMsg">{{errorMsg}}</div>

				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
				
			</form>
		</div>

		<script type="text/javascript">
			angular.module('postExample', []).controller('PostController', ['$scope', '$http', function($scope, $http){
					this.postForm = function(){
						var encodedString = 'username='+encodeURIComponent(this.inputData.username) + '&password=' + md5(encodeURIComponent(this.inputData.password));

						$http({
							method: 'POST',
							url: 'checklogin.php',
							data: encodedString,
							headers: {'Content-Type':'application/x-www-form-urlencoded'}
						})
						.success(function(data, status, headers, config){
							console.log(data);
							if(data.trim()==='correct'){
								window.location.href = 'main.php';
							}
							else {
								$scope.errorMsg = 'Login fail';
								alert(data.trim());
							}
						});
					};
			}]); 
		</script>

    <!-- md5.min.js -->
    <script src='md5.min.js'></script>
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		
	</body>
</html>