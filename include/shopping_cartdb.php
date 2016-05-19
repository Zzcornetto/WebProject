 <?php  



  include ('database.php');
  //include ('getuid.php');


    $sql = "SELECT * FROM `recipe` WHERE 1";




$result = mysqli_query($conn,$sql);

//If existed show error if not,add a new one
    if (mysqli_num_rows($result) > 0) 
    {     echo "Shopping Cart";  
        while ($row = mysqli_fetch_assoc($result)){
            $arr=array("order"=>$row['Order'], "product"=>$row['Product'], "Price" => $row['Price'], "Amount"=>$row['Amount']);
            echo "<br>"."Order :" ."<td>". $arr['order'];
            echo "<br>"."Product :" ."<td>". $arr['product'];
            echo "<br>"."Price :" ."<td>". $arr['Price'];
            echo "<br>"."Amount :"."<td>" . $arr['Amount'];

         }
    }

     

$conn->close();

?>