<?php 
require_once 'email.php';

class gmail extends email{
	public $spam;
	public $secure;

	public function getSpam(): string{
		return $this->spam;
	}
	public function getSecure(): bool{
		return $this->secure;
	}
	public function setSpam(string $spam): void{
		$this->spam = $spam;
	}
	public function setSecure(bool $secure): void{
		$this->secure = $secure;
	}
}