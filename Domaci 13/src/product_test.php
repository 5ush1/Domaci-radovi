<?php 

class product 
{
	const VALID_BOJE = [self::BOJA_PLAVA, self::BOJA_CRVENA, self::BOJA_ZELENA];

	const BOJA_PLAVA = "plava";
	const BOJA_CRVENA = "crvena";
	const BOJA_ZELENA = "zelena";
	
	private $ime;
	private $cena;
	private $boja;

	public function setIme(string $novoIme): void
	{
		$this->ime = $novoIme;
	}
	public function getIme(): string
	{
		return $this->ime;
	}
	public function setCena(float $novaCena): void
	{
		$this->cena = $novaCena;
	}
	public function getCena(): float
	{
		return $this->cena;
	}
	public function setBoja(string $novaBoja): void
	{
		if (self::isValidBoja($novaBoja)) {
			$this->boja = $novaBoja;
		}else{
			die("Nije validna boja. Validne boje su " . implode(", ", self::VALID_BOJE));
		}
	}
	public function getBoja(): string
	{
		return $this->boja;
	}
	public function write()
	{
		return $this->ime . " " . $this->boja . " " .  $this->cena;
	}

	public static function isValidBoja(string $boja): bool
	{
		return in_array($boja, self::VALID_BOJE);
	}
}

