<html>
<head>
<script type="text/javascript">
    function showWthr(str)
    {
    	// xmlDoc= xml.responseXML;
    	// txt="";
    	// x=xmlDoc.getElementsByTagName('city');
    	//     for (i = 0; i < x.length; i++) { 
     //        txt += x[i].getAttribute('id') + "<br>";
     //    }
     //    document.getElementById("test").innerHTML = txt; 
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

          	// Get Country
          	document.getElementById("Country").innerHTML="City = "+xmlhttp.responseText;

          	// <!--Get Coordinate-->
          	var Coord=xmlDoc.getElementsByTagName('coord')[0];
          	var Lon=Coord.getAttribute('lon');
          	var Lat=Coord.getAttribute('lat');
            // Print Lat/Lon
            document.getElementById("lon").innerHTML="Longtitude ="+Lon;
            document.getElementById("lat").innerHTML="Latitude =" +Lat;

            // <!--Get Temparature-->
          	var Temp=xmlDoc.getElementsByTagName('temperature')[0];
          	var minT=Temp.getAttribute('min');
          	var maxT=Temp.getAttribute('max');
            // Print Lat/Lon
            document.getElementById("minTemp").innerHTML="Min temparature =" +minT;
            document.getElementById("maxTemp").innerHTML="Max temparature =" +maxT;
            document.getElementById("showall").innerHTML=xmlDoc;

            var humid=xmlDoc.getElementsByTagName('humidity')[0].getAttribute('value');
            document.getElementById("humidity").innerHTML="Humidity =" +humid;

          }
        };
        xmlhttp.open("GET","http://api.openweathermap.org/data/2.5/weather?q="+str+"&mode=xml&appid=2f93b30c96cb82dbbe1c36795b7503dd",true);
        xmlhttp.send();
    }
</script>
</head>
<body>

<form>

<input type="text" size="30" onkeyup="showWthr(this.value)" />
</form>
<div id="Country">City</div>
<div id="lon">Longtitude =</div>
<div id="lat">Latitude =</div>
<div id="minTemp">Min Temparature=</div>
<div id="maxTemp">Max Temparature=</div>
<div id="humidity">Humidity=</div>
<div id="showall">All=</div>


</body>
</html>