<?php

class PetiteRoue
{
     private $jour = 1;
     public function avanceDunJour()
     {
         if ($this->jour == 10) {
             $this->jour = 1;
         } else {
             $this->jour = $this->jour + 1;
         }
     }

    /**
     * @param int $jour
     */
    public function setJour(int $jour): void
    {
        if($jour> 10){$this->jour = 1;}else{$this->jour = $jour;}
    }

     public function getJour()
     {
         return $this->jour;
     }
}
$a = new  PetiteRoue();
/*$a->setJour(8);
echo $a->getJour()."\n";
$a->avanceDunJour();
echo $a->getJour()."\n";*/

