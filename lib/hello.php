<?php# Default is "World"
     # Author: Harrison Slater (akand_@hotmail.com)
?>
<?php
  require "greeter.php";
  
  $g = new Greeter($_GET ? $_GET['name'] : "World");
  echo $g->greet();
  
?>