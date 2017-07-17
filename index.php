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
  echo ('<i>'.$this->chaine.'</i><br>');
}
}
$display=new phrase();
$display->gras();
$display->maj();
$display->row();
$display->ita();

// ------------------------exo 4--------------------------------------------


 ?>


</body>
</html>
