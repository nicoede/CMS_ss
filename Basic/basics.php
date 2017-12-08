<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Basics</title>
</head>
<body>
  <?php
  //==============DATA TYPES==============
  $first_name = "Edenilson Jonatas";
  $last_name = "dos Passos";
  $num1 = 10;
  $num2 = 20;
  $num3 = $num1 + $num2;
  $num_vet = array(10, 20, 30, 40); //or $num_vet = [10, 20, 30, 40];
  //With the associative array you can rename the index:
  $assoc_vet = array("num1" => 1, "num2" => 2);
  //To define a global variable just write global in front of it:
  global $x;
  $x = 10;
  //A constant is a value that can not be changed after created
  define("NAME", 1000);
  
  
  
  //The dot is the concatenation sign
  echo $first_name . " " .$last_name;
  echo "<br>";
  echo $num3;
  echo "<br>";
  echo 25 + 15;
  echo "<br>";
  echo $assoc_vet[num1] . "<br>";
  echo "You can not change this " . NAME . "<br>";
  echo "<br><br><br>";
  
  
  
  //===========CONTROL STRUCTURES==========
  if(2 > 5){
    echo "Indeed, 2 is greater than 5";
  }elseif(4 < 5){
    echo "Yes, 4 is less than 5";
  }else{
    echo "Dumb";
  }
  echo "<br><br><br>";
  //===========Comparison Operators========
      /*
        equal ==
        identical === IDENTICAL IS SIMILAR TO EQUAL, HOWEVER, IT ALSO LOOKS AT THE DATA TYPE
        compare > < >= <= <>
        not equal !=
        not identical !==
        and &&
        or ||
        not !
    */
  
  if(4 == "4"){
    echo "true for equal";
  }
  //it's not true for identical because of the type difference
  if(4 === "4"){
    echo "true for identical";
  }
  echo "<br><br><br>";
  
  $n1 = 24;
  
  switch ($n1) {
    case 30:
      echo "It is 30!";
      break;
    case 28:
      echo "It is 28!";
      break;
    case 26:
      echo "It is 26!";
      break;
    case '24':
      echo "It is 24!";
      break;
    
    default:
      echo "No match was found...";
      break;
  }
  echo "<br><br><br>";
  
  //=========WHILE=======
  $counter = 0;
  while($counter < 3){
    echo "The while counter value is: " . $counter . "<br>";
    $counter = $counter + 1;
  }
  echo "<br><br><br>";
  
  //=========WHILE=======
  for($Fcounter = 0; $Fcounter < 3; $Fcounter++){
    echo "The for counter value is: " . $Fcounter . "<br>";
  }
  echo "<br><br><br>";
  
  //========FOREACH=========
  $nums = array(12, 23, 34, 45, 56, 61);
  foreach ($nums as $value) {
    echo "Esse loop é interessante! " . $value . "<br>";
  }
  echo "<br><br><br>";
  
  
  ?>
</body>
</html>