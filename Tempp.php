<?php  
$host      = "localhost"; 
    $username      = "egco427"; 
    $password      = "egco427"; 
    $dbname  = "course";
    $con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }

    //echo 'Connected successfully'; //Passed!
$sql = "select * from recipe";

$result = mysqli_query($con,$sql);
$arr=array();
if(mysqli_num_rows($result) > 0 ) {
	while ($row = mysqli_fetch_assoc($result)){
		 //echo "Name : ".$row['name']."number : ".$row['number']."<br>";

		array_push($arr,$row);
		
	}
	echo json_encode($arr);
}
else{
	echo "0 results";
}
mysqli_close($con);	

 ?>



?>