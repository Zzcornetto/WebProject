<?php 
//come form index.html->pages/index.html->main.php
    session_start();


    // if(isset($_SESSION["checklogin"])){
    //     echo $_SESSION["checklogin"];
    // }
    // else
    // {
    //     header('Location: login.php');
    // }
    // endif;

 //Checklogin   
    if (isset($_SESSION["checklogin2"]) && !empty($_SESSION["checklogin2"])) {
    //echo "Login Accessed";    
    }
    else{  
    echo "Deny go to login.php";
    header('Location: login.php');
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
    <div class="sub_div">
        <<table class="table table-hover">
            <thead>
                <tr>
                    <th>Order</th>
                </tr>
                <tr>
                    <th>Product</th>
                </tr>
                <tr>
                    <th>Amount</th>
                </tr>
                <tr>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>        
    </body>