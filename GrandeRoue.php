<?php
include "PetiteRoue.php";


class GrandeRoue
{

    private $jour = 1;
    private $proue ;

    public function __construct(){
      $this->proue = new  PetiteRoue();

    }

    public function avanceDunJour()
    {
        if ($this->jour == 15) {
            $this->jour = 1;
        } else {
            $this->jour = $this->jour + 1;
        }
        $this->proue->avanceDunJour();
    }

    public function setJour(int $jour): void
    {
        if($jour> 15){$this->jour = 1;}else{$this->jour = $jour;}
    }
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * @return PetiteRoue
     */
    public function getProue(): PetiteRoue
    {
        return $this->proue;
    }


    public function getpJour()
    {
        return $this->proue->getJour();
    }

    public function __toString()
    {
       return
    }

}

$a = new  GrandeRoue();

$a->setJour(8);
$a->avanceDunJour();

echo $a;
