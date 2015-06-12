<?php
class Greeter{
  private $who = "";
  
  function __construct($who) {
    $this->$who = $who;
  }
  function greet() {
    echo "Hello " . $this->$who;
  }
}
?>