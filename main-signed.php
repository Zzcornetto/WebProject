<?php

session_start();

if (isset($_SESSION["checklogin2"]) ){
	echo $_SESSION["checklogin2"];

}
else{
	echo "string2";
	header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

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
			.box_div{
					border-radius: 10px;
				width: 30%;
				border:5px solid gray;
				margin-left: 13%;
				margin-top: 2%;
			}

			.box_line{
				margin:3%;
				border:10px solid gray;
				border-radius: 10px;
				padding: 3%;
			}

			.radiocomp_div{
				width: 30%;
			}
			.radio_div{
				padding:3%;
			}
			.button_div{
				padding-bottom: 5%;
			}

			.login{
				    margin: auto;
    				width: 80%;   					
    				padding: 10px;
    				color: blue;
			}
		</style>

	</head>
	<body>
	<div class="center_div">
				<p>AroundMU</p>
	</div>
	<div id="actionlist" align="right" class="login">
		<a href="#">login</a>
		<a href="logout.php">logout</a>
		<a href="#3">register</a>
	</div>
	
	<div class="container-fluid">
		<div class="box_div col-sm-12">
			<h1 align="center">Filter</h1>
			<div class="radio radio_div">
				<label class="radiocomp_div">
					<input type="radio" name="" id="MainDish" value="MainDish" checked="checked">
					Main Dish
				</label>
				<label class="radiocomp_div">
					<input type="radio" name="" id="Dessert" value="Dessert" checked="checked">
					Dessert
				</label>
				<label class="radiocomp_div">
					<input type="radio" name="" id="Appertizer" value="Appertizer" checked="checked">
					Appertizer
				</label>
							<label class="radiocomp_div">
					<input type="radio" name="" id="Soup" value="Soup" checked="checked">
					Soup
				</label>
							<label class="radiocomp_div">
					<input type="radio" name="" id="Drink" value="Drink" checked="checked">
					Drink
				</label>
							<label class="radiocomp_div">
					<input type="radio" name="" id="SideDish" value="SideDish" checked="checked">
					SideDish
				</label>
			</div>
			<div align="center" class="button_div">
					<button type="button" class="btn btn-default" align="center">Apply</button>
			</div>

		</div>

				<div class="box_div col-sm-12">
			<h1 align="center">Search</h1>
			<div class="form-group">
				<div class="col-sm-12">
					<input type="search" name="" id="input" class="form-control" value="" required="required" title="">
				</div>
			</div>
			<div align="center" class="button_div">
					<button type="button" class="btn btn-default" align="center">Apply</button>
			</div>
		</div>		
	</div>
	
<!--  -->
	<div id="div1" style="height: 300px;position:relative; margin:3%; "> <!--Outer Frame-->
    <div id="div2" style="max-height:100%;overflow:auto;border:10px solid gray; border-radius:10px; padding:3%">
        <div id="div3" style="height:1500px;border:5px  border-radius:10px;">
        <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="..." alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="..." alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="..." alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="..." alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="..." alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="..." alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="..." alt="...">
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3">
		    <a href="#" class="thumbnail">
		      <img src="..." alt="...">
		    </a>
		  </div></div>
    </div>
</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	</body>
</html>