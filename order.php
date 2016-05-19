<?php
include('include/database.php');


$name= $_REQUEST["obj"];
$count=0;

    
//check Username
    $qry = "SELECT * FROM recipe WHERE Product LIKE '%".$name."%'";
    $result = mysqli_query($conn,$qry);

//If existed show error if not,add a new one
    if (mysqli_num_rows($result) > 0) 
    {       
        while ($row = mysqli_fetch_assoc($result)){
            $arr=array("order"=>$row['Order'], "product"=>$row['Product'], "Price" => $row['Price'], "Amount"=>$row['Amount']);
            $count++;
	       }
               
                // echo $arr['order'];
                $arr['Amount']=$arr['Amount']+$count;
                $arr['Price']=$arr['Price']+($count*$arr['Price']);

            $update_qry ="UPDATE recipe SET Amount= '".$arr['Amount']."', Price= '".$arr['Price']."' WHERE Product LIKE '%".$name."%'";
            $result_up = mysqli_query($conn,$update_qry);
        //     $update_qry=" UPDATE recipe SET Amount= '$uAmount', Price=$uPrice WHERE CustomerName='Alfreds Futterkiste'";
            //echo json_encode($arr);
        }
	 else
	 {//Submit
         $qry_search = "SELECT * FROM `img` WHERE `product` LIKE 'Crepe'";
         $result_search = mysqli_query($conn,$qry_search);
         while ($row = mysqli_fetch_assoc($result_search)){

            $arr=array("id"=>$row['id'], "type"=>$row['type'], "product" => $row['product'], "price"=>$row['price']);
           }


		 $qry_add = "INSERT INTO `recipe`(`Order`, `Product`, `Price`, `Amount`) VALUES (NULL,'".$name."','".$arr['price']."','1')";
         $result_added = mysqli_query($conn,$qry_add);
         //echo json_encode($arr);
	}

$conn->close();

?>

