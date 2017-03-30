<?php
  class Human{
    public $name;
    public $height;
    public $weight;

    public function eat($food){
      echo $this->name."'s eating ".$food."<br>";
    }
  }

  /**
   *
   */
  class NBAPlayer extends Human
  {
    public $team;
    public $playerNumber;
    function __construct($name, $height, $weight, $team, $playerNumber){
      echo "IN NBAPlayer __construct"."<br>";
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
      $this->team = $team;
      $this->playerNumber = $playerNumber;
    }

    function __destruct() {
        echo "销毁 ".$this->name."的__destruct"."<br>";
    }

    public function run(){
      echo "Running\n";
    }

    public function jump(){
      echo "Jumping\n";
    }

    public function shoot(){
      echo "Shooting\n";
    }
  }

  $j = new NBAPlayer("James", "198cm", "98kg", "Bull", "23");
  echo $j->name."<br>";
  $j->eat("Apple");

 ?>
