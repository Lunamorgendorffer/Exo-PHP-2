<?php
echo "<h4>Exercice 1</h4><br>";
$texte ="Mon texte en paramètre";

function convertirMajRouge($texte) { 
    if($texte==="Mon texte en paramètre"){
        echo "<p style=color:red>".mb_strtoupper($texte)."</p>";
    }
    
}
echo convertirMajRouge($texte);
?>


<h4>Exercice 2</h4><br>
<?php
$capitales = ["France" => "Paris","Allemagne" => "Berlin","USA" => "Washington","Italie" => "Rome"];

ksort($capitales);

function afficherTableHTML($array)
{
    echo "<table border=1><th>Pays </th><th>Capitale </th>";
    foreach($array as $k => $v)
    {
        echo "<tr><td>". strtoupper($k)."</td><td>". $v."</td></tr>";
    }
        echo "</table>";
}

afficherTableHTML($capitales);
?>

<h4>Exercice 3</h4><br>
<?php

echo "<a href=https://elan-formation.eu/target=_blank>Elan</a>";

?>

<h4>Exercice 4</h4><br>
<?php
$capitales = ["France" => "Paris","Allemagne" => "Berlin","USA" => "Washington","Italie" => "Rome"];

ksort($capitales);

function TableHTML($array)
{
    echo "<table border=1><th>Pays</th><th>Capitale</th><th>Lien wiki </th>";
    foreach($array as $k => $v)
    {
        echo "<tr><td>". strtoupper($k)."</td><td>". $v."</td><td><a href=https://fr.wikipedia.org/wiki/$v>Lien</a></td></tr>";
    }
        echo "</table>";
}

TableHTML($capitales);
?>

<h4>Exercice 5</h4><br>
<?php

$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($personnes){
    echo "<form action=action.php method=post>";
    foreach ($personnes as $value) {
        echo $value."<br><input type=text name=nom/><br>";
    }
    echo "</form>";
}
// "<form action=action.php method=post>"
//     $value <br>
//     "<input type=text name=nom/><br>";

// "</form>"
function showInput($personnes){
    $form = "<form action=action.php method=post>";
    foreach ($personnes as $value) {
        $form .= $value."<br><input type=text name=nom/><br>";
    }
    $form .= "</form>";
    // var_dump($form);
    return $form;
}

// afficherInput($nomsInput);

echo showInput($nomsInput);

// var_dump($form);
var_dump(showInput($nomsInput));

// var_dump($nomsInput);

?>

<h4>Exercice 6</h4><br>
<?php
$elements = ["Monsieur","Madame","Mademoiselle"];

function alimenterListeDeroulante($civilite) {    
    echo "<select>";   
    foreach ($civilite as $value) {        
        echo "<option value='" . $value . "'>" . $value . "</option>";    
    }    
    echo "</select>";
}

alimenterListeDeroulante($elements);

?>

<h4>Exercice 7</h4><br>
<?php

$elements = ["Choix 1" => true,"Choix 2" => false,"Choix 3" => true];

function genererCheckbox($cases) {  
    foreach ($cases as $keys => $values) { 
        echo '<input type="checkbox" name="'.$keys.'" value="'.$values.'"';
        if ($values == true) {      
            echo ' checked';
        }    
        echo '>'.$keys.'<br>';  
    }
}

genererCheckbox($elements);
?>

<h4>Exercice 8</h4><br>
<?php

$url="http://my.mobirise.com/data/userpic/764.jpg";

function repeterImage($url,$n) {
    for ($i= 0; $i < $n; $i++) {
        echo "<img src=$url>";
    }    
}

repeterImage($url, 4);
?>

<h4>Exercice 9</h4><br>
<?php

$nomsRadio = ["Monsieur","Madame","Mademoiselle"];

function afficherRadio($nomsRadio) {
    echo "<form>";
    foreach($nomsRadio as $value) {
        echo '<input type="radio" name="civilite" value="'.$value.'"> '.$value.'<br>';
    }
    echo "</form>";
}

afficherRadio($nomsRadio);

?>

<h4>Exercice 10</h4><br>
<?php

$forms = ["Nom","Prenom","Adresse","Email","Ville","Sexe"];


function afficherFormulaire($array) {
    echo "<form action=action.php method=post>";
    foreach ($array as $value) {
        echo $value."<br><input type=text name=nom/><br>";
    }
    echo "</form>";
}

afficherFormulaire($forms);

$intitules  = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

function afficherListe($listes) {    
    echo "<select>";   
    foreach ($listes as $value) {        
        echo "<option value='" . $value . "'>" . $value . "</option>";    
    }    
    echo "</select>";
}

afficherListe($intitules);

?>

<h4>Exercice 11</h4><br>
<?php

function formaterDateFr($date){
    //change french date format
    $dateFormat = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
    $time= strtotime($date); //change value of the string to be a type time
    echo $dateFormat->format($time);//define the french format for the date $time
}
echo formaterDateFr("2018-02-23");
?>

<h4>Exercice 12</h4><br>
<?php
$tableauValeurs=[true,"texte",10,25.369,array("valeur1","valeur2")];

foreach ($tableauValeurs as $variable) { 
    var_dump($variable);
}

?>

<h4>Exercice 13</h4><br>
<?php

class Voiture {
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_vitesseActuelle;

    public function __construct($marque, $modele, $nbPortes, $vitesseActuelle,$statut=false){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle=0; 
        $this->statut=$statut;
    }

    public function get_marque(){
        return $this->_marque;
    }

      public function set_marque($_marque){
        $this->_marque = $_marque;
    }

      public function get_modele() {
        return $this->_modele;
    }

      public function set_modele($_modele) {
        $this->_modele = $_modele;
    }

    public function get_nbPortes(){
        return $this->_nbPortes;

    }

    public function set_nbPortes($_nbPortes){
        $this->_nbPortes= $_nbPortes;
    }

    public function get_vitesseActuelle(){
        return $this->_vitesseActuelle;
    }

    public function set_vitesseActuelle($_vitesseActuelle){
        return "La vitesse du véhicule ".$this->_marque." ".$this->_modele." est de ". $this->_vitesseActuelle." km/h <br>" ; 
    }

    public function get_statut(){
        $this->statut=$statut;
    }

    public function set_statut(){
        $this->statut=false;
    }

    public function demarrer(){
        if ($this->statut == false){
            $this->satut = true;
            echo "La voiture ".$this->_marque." ".$this->_modele." démarre <br>";
        }else{
            echo "il faut démarer la voiture".$this->_marque." ".$this->_modele."<br>";
        }
    }
    
    public function accelerer($vitesseActuelle){
        if ($this->statut == true){
            $this->_vitesseActuelle+=$vitesseActuelle;
            echo "La voiture ".$this->_marque." ".$this->_modele." accélère de ".$vitesseActuelle.". LA vitesse est alors de ".$this->get_vitesseActuelle()."<br>";
        
        }elseif ($this->statut == false){
                echo "Pour accélerer, il faut démarrer la voiture ".$this->_marque." ".$this->_modele ."<br>";
            } 
    }    
    

    public function stopper(){
        if ($this->statut == true){
            $this->statut == false;
            echo "La voiture".$this->_marque." ".$this->_modele." est arreté <br>";
        }else{
            echo " la voiture est déja à l'arret <br>";
        }
    }

    public function infoVehicule($tableVoitures)
    {
      echo "<table border=1>";
      foreach($tableVoitures as $key => $voiture)
      { 
        $indice = $key + 1;
        echo "<th> info Vehicule ".$indice."</th> <tr><td>".$voiture->__toString()."</td></tr>";
      }
      echo "</table>";
    }

    public function __toString(){
        return "Marque : ".$this->get_marque()."<br>                     
        Modèle : ".$this->get_modele()."<br>                  
        Nombre de portes : ".$this->get_nbPortes()."<br>                   
        Vitesse actuelle : ".$this->get_vitesseActuelle()."km/h <br>";
    }

}

$v1= new voiture ("Peugeot","408",5,10,true);
//var_dump($v1);
echo $v1->get_marque()." ".$v1->get_modele()." a ".$v1->get_nbPortes()."  ".$v1->get_vitesseActuelle()."<br>";
$v1->demarrer();
$v1->stopper();
$v1->accelerer(20);
$v1->accelerer(30);
var_dump($v1);

$v2=new voiture ("Citroen","C4",3,10);
//var_dump($v2);
$v2->demarrer();
$v2->stopper();
$v2->accelerer(20);

$tableVoitures = [$v1, $v2];
$v3 = new Voiture("BMW","I3 150", 4,6);
array_push($tableVoitures, $v3);
$v1->infoVehicule($tableVoitures);

?>

<h4>Exercice 14</h4><br>
<?php
class car {
    private $_marque;
    private $_modele;

    public function __construct($marque, $modele) {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    public function getInfos() {
        return "Marque : ".$this->_marque."<br/>Modèle : ".$this->_modele;
    }
}

class VoitureElec extends car {
    private $autonomie;

    public function __construct($marque, $modele, $autonomie) {
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    public function getInfos() {
        return parent::getInfos()."<br/>Autonomie : ".$this->_autonomie." km";
    }
}

$v1 = new car("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";


?>

<h4>Exercice 15</h4><br>
<?php
$email="elan@elan-formation.fr";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email' est valide.";
} else {
    echo "L'adresse email '$email' est invalide.";
}

?>