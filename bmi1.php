<?php
class Mens {
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
    
}
class Deelnemer extends Mens {
    
}
/*
$m1 = new Mens("Floris");
echo $m1->geefmejenaam() . " " . $m1->geefmejebmi();
*/
echo "<BR>";
$m2 = new Mens("Piet", 1.67, 63.5);

echo $m2->geefmejenaam() . " " .round($m2->geefmejebmi(),1);

echo "<BR>";
$iemand = new Coach("Klaas", 1.50, 40.0);

echo $iemand->geefmejenaam() . " " . round ($iemand->geefmejebmi(),1);
$iemand2 = new Deelnemer("Sjaak", 1.85, 80.0);

echo "<BR>";

echo $iemand2->geefmejenaam() . " " .round($iemand2->geefmejebmi(),1);


?>