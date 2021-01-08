<?php 

require_once 'productInterface.php';

class table implements productInterface
{
	private $color;
	private $material;

	public function setColor(string $Color): void
	{
		$this->color = $Color;
	}
	public function setMaterial(string $Material): void
	{
		$this->material = $Material;
	}
	public function getColor(): string
	{
		return $this->color;
	}
	public function getMaterial(): string
	{
		return $this->material;
	}
	
}