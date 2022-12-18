<!DOCTYPE html>
<html>
<body>

<?php
  function my_callback($item){
    return strlen($item);
  }

  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map("my_callback", $strings);
  print_r($lengths);
?>
<br>
<?php
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
?>
<br>
<?php
  function exclaim($str){
    return $str . "!";
  }

  function ask($str){
    return $str . "?";
  }

  function printFormatted($str, $format){
    echo $format($str);
  }

  printFormatted("Hello World", "exclaim");
  printFormatted("Hello World", "ask");
?>


</body>
</html>