<?php
class Horloge
{
    private $heure =0;
    private $minutes =0;
    private $secondes =0;
    public function getHeure(){
      return $this->heure;
    }
    public function setHeure($heureDonnee){
        if($heureDonnee >23){
            $this->heure = 23;
        }
        elseif($heureDonnee < 0){
            $this->heure  = 0;
        }
        else{
            $this->heure = $heureDonnee;
        }
    }
    public function getMinutes(): int
    {
        return $this->minutes;
    }
    public function setMinutes(int $minuteDonnee): void
    {
        if($minuteDonnee >60){
            $this->minutes = 0;
        } else {
            $this->minutes = $minuteDonnee;
        }

    }
    public function getSecondes(): int
    {
        return $this->secondes;
    }
    public function setSecondes(int $secondes): void
    {
        $this->secondes = $secondes;
    }

    public function avanceSeconde(){
        $this->secondes =$this->secondes +1;
        if($this->secondes == 60){
            $this->secondes = 0;
            $this->minutes = $this->minutes +1;
            if ($this->minutes == 60){
                $this->minutes = 00;
            }
        }
    }
}
$cas = new Horloge();
$cas->setHeure(23);
$cas->setMinutes(30);
$cas->setSecondes(59);
$cas->avanceSeconde();
echo "il est ".$cas->getHeure().":".$cas->getMinutes().":".$cas->getSecondes();
?>