<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Functions</title>
</head>

<body>
  
  <?php 
  //This is self-explanatory, is it now?;
  function sum($n1, $n2){
    echo $n1 + $n2 . "<br>";
    $value = $n1 + $n2;
    is_even($n2);
    return $value;
  }
  
  function is_even($prime){
    if($prime % 2 == 0){
      echo "It is a prime number" . "<br>";
    }else{
      echo "It is not a prime number" . "<br>";
    }
  }
  
  $result = sum(6, 6);
  echo "The result is " . $result . "<br>";
  echo "<br><br><br>";
  
  //=======Math built in functions=======
  echo pow(2, 10) . "<br>";
  echo rand() . "<br>";
  echo sqrt(100) . "<br>";
  //The following function will round a number
  echo round(4.6) . "<br>";
  echo round(4.4) . "<br>";
  echo ceil(4.4) . "<br>";
  echo floor(4.4) . "<br>";
  echo "<br><br><br>";
  
  //=======String built in functions=======
  $string = "This is just a test";
  echo strlen($string) . "<br>";
  echo strtoupper($string) . "<br>";
  echo strtolower($string) . "<br>";
  echo "<br><br><br>";
  
  //=======Array built in functions=======
  $vet = [1, 45, 43, 445, 39, 56];
  echo max($vet) . "<br>";
  echo min($vet) . "<br>";
  echo sort($vet) . "<br>";
  print_r($vet);
  echo "<br>";
  $found = in_array(39, $vet);
  if($found){
    echo "Good, you found it";
  }else{
    echo "Not good, you did not find it";
  }
  echo "<br><br><br>";
  
  ?>
</body>
</html>