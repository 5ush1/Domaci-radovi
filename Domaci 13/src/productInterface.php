<?php 

interface ProudctInterface{
	public function setColor(string $newColor): void;
	public function setMaterial(string $newMaterial): void;
	public function getColor(): string;
	public function getMaterial(): string;
	
}