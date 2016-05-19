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
		<title>Title Page</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

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
		<script>
			function maindishfilter() {
			    document.getElementById("maindish").style.display = "initial";
			    document.getElementById("sidedish").style.display = "none";
			    document.getElementById("dessert").style.display = "none";
			    document.getElementById("beverage").style.display = "none";
			    document.getElementById("appertizer").style.display = "none";
			    document.getElementById("soups").style.display = "none";
			}
			function sidedishfilter() {
				document.getElementById("maindish").style.display = "none";
			    document.getElementById("sidedish").style.display = "initial";
			    document.getElementById("dessert").style.display = "none";
			    document.getElementById("beverage").style.display = "none";
			    document.getElementById("appertizer").style.display = "none";
			    document.getElementById("soups").style.display = "none";
			 }
			function dessertfilter() {
				document.getElementById("maindish").style.display = "none";
			    document.getElementById("dessert").style.display = "initial";
			    document.getElementById("sidedish").style.display = "none";
			    document.getElementById("beverage").style.display = "none";
			    document.getElementById("appertizer").style.display = "none";
			    document.getElementById("soups").style.display = "none";
			}
			function beveragefilter() {
				document.getElementById("maindish").style.display = "none";
			    document.getElementById("beverage").style.display = "initial";
			    document.getElementById("sidedish").style.display = "none";
			    document.getElementById("dessert").style.display = "none";
			    document.getElementById("appertizer").style.display = "none";
			    document.getElementById("soups").style.display = "none";
			}
			function appertizerfilter() {
				document.getElementById("maindish").style.display = "none";
			    document.getElementById("appertizer").style.display = "initial";
			    document.getElementById("sidedish").style.display = "none";
			    document.getElementById("dessert").style.display = "none";
			    document.getElementById("beverage").style.display = "none";
			    document.getElementById("soups").style.display = "none";
			}
			function soupfilter() {
				document.getElementById("maindish").style.display = "none";
			    document.getElementById("soups").style.display = "initial";
			    document.getElementById("sidedish").style.display = "none";
			    document.getElementById("dessert").style.display = "none";
			    document.getElementById("beverage").style.display = "none";
			    document.getElementById("appertizer").style.display = "none";
			}

	function showWthr()
    {	var str="Bangkok";
        if (str==="")
        {
          document.getElementById("Country").innerHTML="";
          return;
        }

        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange=function()
        {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
          {
          	// GetXML data
          	var xmlDoc=xmlhttp.responseXML;

            // <!--Get Temparature-->
          	var Temp=xmlDoc.getElementsByTagName('temperature')[0];
          	var minT=Temp.getAttribute('min')-273.15;
          	var maxT=Temp.getAttribute('max')-273.15;
            // Print Lat/Lon
            if (minT<=25) { document.getElementById("feel").innerHTML="So Chill Today";}
            else{document.getElementById("feel").innerHTML="A bit hot isn't it, Try our drink."}
            document.getElementById("showall").innerHTML="Temp " +minT+"-"+maxT+"°C "+xmlhttp.responseText;
          }
        };
        xmlhttp.open("GET","http://api.openweathermap.org/data/2.5/weather?q="+str+"&mode=xml&appid=2f93b30c96cb82dbbe1c36795b7503dd",true);
        xmlhttp.send();
    }

    	function add(value)
    	{
    		alert(value+" added");
    		xmlhttp.open("GET", "order.php?obj="+ value , true);
        	xmlhttp.send();
    	}
		</script>
	

	</head>
	<body onload="showWthr()">
		
		
		<div class="center_div" onclick="location.href='main.php';">
					<p>AroundMU</p>
		</div>
		<div id="feel" align="center" style="font-size:30px;">Detail</div>
		<div id="actionlist" align="right" class="login" >
			<div id="user">
			<?php
				echo "hi, ".$_SESSION["checklogin2"];
			?>	  	
			</div>
			<a href="login.php" id="login" >login</a>
			<a href="logout.php" id="logout">logout</a>
			<a href="register.php">register</a>
			<a href="include\shopping_cartdb.php">ShoppingCart</a>
		</div>
	
	<div class="container-fluid">
		<div class="box_div col-sm-12">
			<h1 align="center">Filter</h1>
			<div class="radio radio_div" id = 'filters'>
				<label class="radiocomp_div">
					<input type="radio" onclick = "maindishfilter()" name="check" id="MainDish" value="main" >
					MainDish
				</label>
				<label class="radiocomp_div">
					<input type="radio" onclick = "dessertfilter()" name="check" id="Dessert" value="dess" >
					Dessert
				</label>
				<label class="radiocomp_div">
					<input type="radio" onclick = "appertizerfilter()" name="check" id="Appertizer" value="apper"  >
					Appertizer
				</label>
				<br>
				<br>
				<label class="radiocomp_div">
					<input type="radio" onclick = "soupfilter()" name="check" id="Soup" value="soup" >
					Soup
				</label>
				<label class="radiocomp_div">
					<input type="radio" onclick = "beveragefilter()" name="check" id="Drink" value="bev" >
					Beverage
				</label>
				<label class="radiocomp_div">
					<input type="radio" onclick = "sidedishfilter()" name="check" id="SideDish" value="side" >
					SideDish
				</label>
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
	<div id="div1" style="height: 300px;position:relative; margin:3%; "> <!--Outer Frame-->
    <div id="div2" style="max-height:100%;overflow:auto;border:10px solid gray; border-radius:10px; padding:3%">
        <div id="div3" style="height:150px;border:5px  border-radius:10px;">
       <div id ='maindish'>
        <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="steak">
		    <a href="#" title="Steak" class="thumbnail">
		      <img src="image/steak.jpg"  width="900" height="600" value = 'steak'>
		      <h4 class = 'tag' align = "center"><span align = "center">Steak</span></h4>
		      <div class = "quantity" align="center" >
		      	<span>70 Baht</span> 
		      </div>
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="American Fried Rice">
		    <a href="#" class="thumbnail">
		      <img src="image/american_rice.jpg" value = 'rice' alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">American Fried Rice</span></h4>
		      <div class = "quantity" align="center">
		      	<span>80 Baht</span>
		      </div>
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Krapao Mu">
		    <a href="#" class="thumbnail">
		      <img src="image/krapao.jpg" value = 'krapao'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Krapao Mu</span></h4>
		      <div class = "quantity"align="center" >
				<span>50 Baht</span>
		      </div>
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Porridge">
		    <a href="#" class="thumbnail">
		      <img src="image/porridge.jpg" value = 'porridge'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Porridge</span></h4>
		      <div class = "quantity"align="center" >
		      	<span>30 Baht</span>
		     </div>
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Spaghetti">
		    <a href="#" class="thumbnail">
		      <img src="image/spaghetti.jpg" value = 'spaghetti'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Spaghetti</span></h4>
		      <div class = "quantity" align="center">
		      	<span>60 Baht</span>
		      </div>
		    </a>
		  </div>
	 </div>
	 <div id = 'sidedish'>
		  <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Baked Potato">
		    <a href="#" class="thumbnail">
		      <img src="image/baked_potato.jpg" value = 'potato'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Baked Potato</span></h4>
		      <div class = "quantity"align="center" >
		      	<span>25 Baht</span>
		      </div>
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Coleslaw">
		    <a href="#" class="thumbnail">
		      <img src="image/coleslaw.jpg" value = 'coleslaw 'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Coleslaw</span></h4>
		      <div class = "quantity" align="center">
		      	<span>35 Baht</span>
		      </div>
		    </a>
		  </div>
	</div>
	<div id='soups'>
		    <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Mushroom Soup" >
		    <a href="#" class="thumbnail">
		      <img src="image/mushroom_soup.jpg" value ='mushroom'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Mushroom Soup</span></h4>
		      <div class = "quantity"align="center" >
		      	<span>40 Baht</span>
		      </div>
		    </a>
		  </div>
		    <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Tomato Soup">
		    <a href="#" class="thumbnail">
		      <img src="image/tomato_soup.jpg" value ='tomato'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Tomato Soup</span></h4>
		      <div class = "quantity" align="center">
		      	<span>40 Baht</span>
		      </div>
		    </a>
		  </div>
	</div>
	<div id = 'appertizer'>
			<div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Nugget" >
		    <a href="#" class="thumbnail">
		      <img src="image/nugget.jpg" value ='nugget' alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Nugget</span></h4>
		      <div class = "quantity" align="center">
		      	<span>40 Baht</span>
		      </div>
		    </a>
		  </div>		   
		   <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="French Fries">
		    <a href="#" class="thumbnail">
		      <img src="image/french_fries.jpg"value ='fries' alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">French Fries</span></h4>
		      <div class = "quantity" align="center">
		      	<span>40 Baht</span>
		      </div>
		    </a>
		  </div>
		    <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Fish and Chip">
		    <a href="#" class="thumbnail">
		      <img src="image/fish_and_chip.jpg" value = 'fish'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Fish and Chip</span></h4>
		      <div class = "quantity" align="center">
		      	<span>65 Baht</span>
		      </div>
		    </a>
		  </div>
		   <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Salad">
		    <a href="#" class="thumbnail">
		      <img src="image/salad.jpg" value = 'salad'alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Salad</span></h4>
		      <div class = "quantity" align="center">
		      	<span>50 Baht</span>
		      </div>
		    </a>
		  </div>
	</div>
	<div id= 'dessert'>
		    <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Cake">
		    <a href="#" class="thumbnail">
		      <img src="image/cake.jpg" value = 'cake' alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Cake</span></h4>
		      <div class = "quantity"align="center" >
		      	<span>40 Baht</span>
		      </div>
		    </a>
		  </div>
		  <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Crepe">
		    <a href="#" class="thumbnail">
		      <img src="image/crepe.jpg" value = 'crepe' alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Crepe</span></h4>
		      <div class = "quantity" align="center">
		      	<span>60 Baht</span>
		      </div>
		    </a>
		  </div>
		    <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Sundae">
		    <a href="#" class="thumbnail">
		      <img src="image/sundae.jpg" value = 'sundae' alt="...">
		      <h4 class = 'tag' align = "center"><span align = "center">Sundae</span></h4>
		      <div class = "quantity" align="center">
		      	<span>70 Baht</span>
		      </div>
		    </a>
		  </div>
	</div>
			<div id = 'beverage'>
				<div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Coke" >
				    <a href="#" class="thumbnail">
				      <img src="image/coke.jpg" value = 'coke'alt="...">
				      <h4 class = 'tag' align = "center"><span align = "center">Coke</span></h4>
				      <div class = "quantity" align="center">
				      	<span>15 Baht</span>
				      </div>
				    </a>
				  </div>
				  <div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Orange Juice">
				    <a href="#" class="thumbnail">
				      <img src="image/orange.jpg" value = 'orange' alt="...">
				      <h4 class = 'tag' align = "center"><span align = "center">Orange Juice</span></h4>
				      <div class = "quantity" align="center" >				      	
				      	<span>20 Baht</span>				      	
				      </div>
				    </a>
				 </div>
					<div class="col-xs-6 col-md-3" onclick="add(this.id)" id="Fresh Water">
						<a href="#" class="thumbnail">
						<img src="image/water.jpg" value = 'water' alt="...">
						<h4 class = 'tag' align = "center"><span align = "center">Fresh Water</span></h4>
						<div class = "quantity" align="center">							
							<span>15 Baht</span>							
						</div>
				    	</a>
			  		</div>
				</div>
		 	</div>
    </div>
</div>
<div id="showall" align="right">Detail</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

