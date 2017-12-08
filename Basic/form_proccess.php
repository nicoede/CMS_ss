<?php

  if(isset($_POST['Submit'])){
    
    $user = $_POST['user'];
    $password = $_POST['password'];
    
    if(strlen($user) < 5){
      echo "Username has to be longer than 5";
    }
    
    //echo "Hello " . $user . "<br>";
    //echo "Your password is: " . $password . "<br>";
    
    
    
  }

?>