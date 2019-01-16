<?php

class mens{
    private $naam;
    private $lengte;
   // private $leeftijd;
    private $gewicht;

    public function geefmejebmi() {
      
        $resultaat = $this->gewicht / ($this->lengte * $this->lengte);

        return $resultaat;
    }

    public function geefmejenaam() {
        return $this->naam;            
    }
    function __construct($pnaam, $plengte, $pgewicht)
    {
        $this->naam = $pnaam;
        $this->lengte= $plengte;
        $this->gewicht= $pgewicht;
    }
}



$m1 = new Mens("Piet", 1.67, 63.5);
$m2 = new Mens("Klaas", 1.83, 100.0);
$m3 = new Mens("Jan", 1.93, 103 );

$klas = [$m1, $m2, $m3];

foreach($klas as $m)
if($m->geefmejebmi() > 25){
echo "<p style='color:red;'>" . "<B>" . $m->geefmejenaam() . " " . round ($m->geefmejebmi(),1) . "</B>" . "<BR>"; 
}
else
echo "<p style='color:green;'>" . $m->geefmejenaam() . " " . round ($m->geefmejebmi(),1) . "<BR>"; 



?>

