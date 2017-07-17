<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Poo</title>
</head>
<body>

<?php
// -----------------------exo 1----------------------------------

class affichage {

  public $hello;

	public function __construct() {
    echo ($this->hello="Bonjour tout le monde<br><br>");
	}
}

$display = new affichage;

// -------------------------exo 2--------------------------------------

class affichage2 {
public $chaine= "bonjour tout le monde moi c'est ";

  public function presentation($nom){
    echo($this->chaine.$nom.'<br><br>');
  }
}
$display= new affichage2();
$display->presentation("luka");

// ------------------------------exo 3--------------------------------------

class phrase {

private $chaine="Poo c'est dur";

public function gras(){
  echo ('<strong>'.($this->chaine).'</strong><br>');
}
public function maj(){
  echo (strtoupper($this->chaine).'<br>');
}
public function row(){
  echo ('<u>'.$this->chaine.'</u><br>');
}
public function ita(){
  echo ('<i>'.$this->chaine.'</i><br><br>');
}
}
$display=new phrase();
$display->gras();
$display->maj();
$display->row();
$display->ita();

// ------------------------exo 4--------------------------------------------

class tri {

public $tab;

public function __construct($tab) {
      $this->tab=$tab;
}
public function trier(){
$tabtri= $this->tab;
sort($tabtri);
return $tabtri;

}
}
$mytab=new tri(array(11, -2, 4, 35, 0, 8, -9));
var_dump($mytab->trier());
echo ('<br>');

// ----------------------------exo 5----------------------------------------

class calc {

  public $nbr1;
  public $nbr2;

public function __construct($un, $deux){
  $this->nbr1=$un;
  $this->nbr2=$deux;
}
public function add(){
  $result=($this->nbr1) + ($this->nbr2);
  echo $result.'<br>';
}
public function soustract(){
  $result=($this->nbr1) - ($this->nbr2);
  echo $result.'<br>';
}
public function multi(){
  $result=($this->nbr1) * ($this->nbr2);
  echo $result.'<br>';
}
public function div(){
  $result=($this->nbr1) / ($this->nbr2);
  echo $result.'<br>';
}
}

$display= new calc(80, 5);
$display->add();
$display->soustract();
$display->multi();
$display->div();


 ?>


</body>
</html>
