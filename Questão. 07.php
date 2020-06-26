<?php
class SuperHeroi {
    private $id;
    private $Mana;
    private $Name;
    private $Origem;
    private $PoderEspecial;
    private $Forca;
    

    public function getId() {
      return $this->Id;
    }
    public function getName() {
      return $this->Name;
    }
    public function getPoderEspecial() {
      return $this->PoderEspecial;
    }
    public function getMana() {
      return $this->Mana;
    }
    public function getForca() {
      return $this->Forca;
    }
    public function getOrigem() {
      return $this->Origem;
    }
    public function setId($id) {
      $this->id = $Id;
    }
    public function setName($Nome) {
      $this->Name = $Name;
    }
    public function setPoderEspecial($PoderEspecial) {
      $this->PoderEspecial = $PoderEspecial;
    }
    public function setEnergia($Mana) {
      $this->Mana = $Mana;
    }
    public function setForca($Forca) {
      $this->Forca = $Forca;
    }
    public function setOrigem($Origem) {
      $this->Origem = $Origem;
    }
    public function __construct($Id, $Name, $PoderEspecial, $Mana, $Forca, $Origem){
      $this->Id = $Id;  
      $this->Name = $Name;
      $this->PoderEspecial = $PoderEspecial;
      $this->Mana = $Mana;
      $this->Forca = $Forca;
      $this->Origem = $Origem;
    
     }
    }
    class Funcoes extends SuperHeroi {
        private $aumentarMana;
        private $calcularPoderMedio;
        
        public function __construct($id, $Name, $PoderEspecial, $Mana, $Forca, $Origem, $AumentarMana, $CalcularPoderMedio){
            Funcoes::setId($Id);  
            Funcoes::setName($Name);
            Funcoes::setPoderEspecial($PoderEspecial);
            Funcoes::setMana($Mana);
            Funcoes::setForca($Forca);
            Funcoes::setOrigem($Origem);
            $this->AumentarMana = $AumentarMana;
            $this->CalcularPoderMedio = $CalcularPoderMedio;
       
        }
		
    public function aumentarMana($Mana){   
        return $this->$Mana * 119122820;
    }
	
	public function calcularPoderMedio($Mana, $Forca){
		$poderMedio = $Mana + $Forca;
		$poderMedio = $NovoPoder / 2;
		return $PoderMedio;
	}
  }
}

$SuperHeroi = new SuperHeroi('01','Dracula', 'VirarMorcegoGigante', 99, 200, 'Inferno');
$SuperHeroi = new SuperHeroi('02','Goku', 'kamehameha', 280, 8001, 'Vegeta');
$SuperHeroi = new SuperHeroi('03','Gerald de Rivia', 'Ser Foda', 110, 409, 'Kaer Mohen');
$SuperHeroi = new SuperHeroi('04','Luffy', 'Gear 5', 200, 480, 'East Blue');