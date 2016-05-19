<?php
include('include/database.php');


$postdata = json_decode(file_get_contents("php://input")); 
    $username     = $postdata->Username;
    $password     = $postdata->Password;
    $name  = $postdata->Name;
    $email = $postdata->Email;
    $creditcard = $postdata->Creditcard;

// tesing
	// $username = "AaaaaaaA";
	// $password = "Baaaaaa";
	// $name ="Caaaaaa";
	// $email ="Daaaaaaaa";
	// $creditcard= "Eaaaaaaa";

	// $accountType="1";
    
//check Username
    $qry = "SELECT * FROM user WHERE username LIKE '%".$username."%'";
    $result = mysqli_query($conn,$qry);
    $row = mysqli_fetch_assoc($result);
//If existed show error if not,add a new one
    if (mysqli_num_rows($result) > 0) 
    {       
            $arr = array('msg' => "", 'error' => 'Error In inserting record, Username has existed.' );
            $jsn = json_encode($arr);
            print_r($jsn);
	}
	 else
	 {//Submit
		 $qry = "INSERT INTO `user` (`name`, `username`, `password`, `email`, `creditcard`, `accountType`) VALUES ('".$name."', '".$username."', '".$password."', '".$email."', '".$creditcard."', '".$accountType."')";
	}



   


    if(isset($username)){
        $qry_res = mysqli_query($conn,$qry);
        if ($qry_res) {
            $arr = array('msg' => "Product Added Successfully!!!", 'error' => '');
            $jsn = json_encode($arr);
             print_r($jsn);
        } 
        else {
            $arr = array('msg' => "", 'error' => 'Error In inserting record');
            $jsn = json_encode($arr);
             print_r($jsn);
        }
    }

$conn->close();
?>