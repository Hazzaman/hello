<?php
class Greeter{
  private $who = "";
  
  function __construct($who) {
    $this->$who = $who;
  }
  function greet() {
    return "Hello " . $this->$who;
  }
}
?>