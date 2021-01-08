<?php 
require_once 'email.php';

class yahoo extends email{
	public $protocol;
	const PROTOCOL_HTTP = "http";
	const PROTOCOL_HTTPS = "https";
	const VALID_PROTOCOLS = [self::PROTOCOL_HTTPS, self::PROTOCOL_HTTP];

	public function getProtocol():string{
		return $this->protocol;
	}
	public function setProtocol(string $protocol): void{
		$this->protocol = $protocol;
	}
	public function isValidProtocol(string $protocol): bool{
		return in_array($protocol, self::VALID_PROTOCOLS);
	}
}