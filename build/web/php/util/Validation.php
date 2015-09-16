<?php

function validation($key){
    // Validate input and sanitize
    if ($_SERVER['REQUEST_METHOD']== "POST") {
       $valid = true; //Your indicator for your condition, actually it depends on what you need. I am just used to this method.
       switch ($key){
           case 0:
               if (isset($_POST['gender'])) {    
                $address="leadership_test.php";
                $_SESSION['gender']=$_POST['gender'];
               }else {
                return "gender is required!";
               }
               break;
           case 1:
              if (isset($_POST['interest_level'])) {    
                $address="accept_or_not.php";
                $_SESSION['interest_level']=$_POST['interest_level'];
              }else {
                return "Please select a interest level!";
              } 
              break;
           case 2:
              if (isset($_POST['accept'])) {    
                $address="passing_position.php";
                $_SESSION['accept']=$_POST['accept'];
              }else {
                return "Please make a choice!";
              } 
              break;
       }
       
      //if valid then redirect
      if($valid){
        header('Location:'.$app_path.$address);
        exit();
      }
    }
  
 return "";
}
?>
