<?php


$name_error = $email_error = $password_error = $age_error = $radio_error = "";
$name = $email = $age = $password = $gender ="";

 if($_SERVER["REQUEST_METHOD"] == "POST") {

 	if(empty($_POST["name"])) {
 		$name_error = "Name is required!";
 	}
 	else {
 		$name = test_input($_POST["name"]);
 		// me kontrollu nese emri permban vetem shkronja dhe white
 		if (!preg_match("/^[a-zA-Z ]*/", $name)) {
 			$name_error = "Only letters and white space allowed!"; 		
 		}
 	}

 	if(empty($_POST["email"])) {
 		$email_error = "Email is required!";
 	}
 	else {
 		$email = test_input($_POST["email"]);
 		// me kontrollu a osht formu mire email adresa
 		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 			$email_error = "Invalid email format";
 		}
 	}


 	if(empty($_POST["age"])) {
 		$age_error = "Age is required!";
 	}
 	else {
 		$age = test_input($_POST["age"]);
 		
 		}

 	
     

    	// $radio = (empty($_POST['gender'])) ? $radio_error = "Gender is required!" : test_input($_POST['gender']);


    	// 	$radio_error = array(); 
    	// if(!isset($_POST["gender"])){ 
     //    $radio_error[] = "No radio buttons were checked."; }
     //    else {

     //    		$gender = test_input($_POST["gender"]);

     //    }


 	if(empty($_POST["password"])) {

 		$password_error = "Password is required";
 	}
 	 else {
 	 	$password = test_input($_POST["password"]);
 	
 	  	if (strlen($_POST["password"]) <= '8') {
            $password_error = "Your Password Must Contain At Least 8 Characters!";
        }
        else if(!preg_match("#[0-9]+#",$password)) {
            $password_error = "Your Password Must Contain At Least 1 Number!";
        }
        else if(!preg_match("#[A-Z]+#",$password)) {
            $password_error = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        else if(!preg_match("#[a-z]+#",$password)) {
            $password_error = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } 
        	} 
 

 } 

 function test_input($data) {
 	$data = trim($data);
 	$data = stripslashes($data);
 	$dara = htmlspecialchars($data);
 	return $data;
 }



?>