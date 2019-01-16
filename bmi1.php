<?php
abstract class Mens {
   private $naam;
   private $lengte;     // in meters
   private $gewicht;    
  //  private $leeftijd; 
 
   public function geefmejebmi() {
        if ($this->lengte <=0 || $this->gewicht <=0)
            throw new Exception("Ik kan geen BMI berekenen vanwege ongeldige lengte/gewicht.");
       $resultaat = $this->gewicht / ($this->lengte * $this->lengte);       
       return $resultaat;              // later echt BMI gaan berekenen
   }
   public function geefmejenaam() {
       return $this->naam;
   }
   
   function __construct($pnaam, $plengte = 0, $pgewicht = 0)
   {
        $this->naam = $pnaam;
        $this->lengte = $plengte;
        $this->gewicht = $pgewicht;
   }
} 
class Coach extends Mens {
    public $personeelsnummer;
    public function geefantwoordopdevraag($vraag) {
        return "dat weet ik niet";
    }
    
}
class Deelnemer extends Mens {
    public $score;
}
/*
$m1 = new Mens("Floris");
echo $m1->geefmejenaam() . " " . $m1->geefmejebmi();
*/
echo "<BR>";
/*
$m2 = new Mens("Piet", 1.50, 63.5);
echo $m2->geefmejenaam() . " " . $m2->geefmejebmi();
*/
echo "<BR>";
$c = new Coach("Klaas", 1.50, 40.0);
echo $c->geefmejenaam() . " " . $c->geefmejebmi();
echo "<BR>";
echo $c->geefantwoordopdevraag("hoe moet ik een abstracte klasse maken?");
echo "<BR>";
$iemand2 = new Deelnemer("Sjaak", 1.85, 80.0);
echo $iemand2->geefmejenaam() . " " . $iemand2->geefmejebmi();
?>