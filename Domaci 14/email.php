<?php 

abstract class email{
	public $senderEmail;
	public $reciverEmail;
	public $subject;
	public $message;
	public $sentAt;
	public $recivedOn;

	public function getSenderEmail(): string{
		return $this->senderEmail;
	}
	public function getReciverEmail(): string{
		return $this->reciverEmail;
	}
	public function getSubject(): string{
		return $this->subject;
	}
	public function getMessage(): string{
		return $this->message;
	}
	public function getSentAt(): string{
		return $this->sentAt;
	}
	public function getRecivedOn(): string{
		return $this->recivedOn;
	}
	public function setSenderEmail(string $senderEmail): void{
		$this->senderEmail = $senderEmail;
	}
	public function setReciverEmail(string $reciverEmail): void{
		$this->reciverEmail = $reciverEmail;
	}
	public function setSubject(string $subject): void{
		$this->subject = $subject;
	}
	public function setMessage(string $message): void{
		$this->message = $message;
	}
	public function setSentAt(string $sentAt): void{
		$this->sentAt = $sentAt;
	}
	public function setRecivedOn(string $recivedOn): void{
		$this->recivedOn = $recivedOn;
	}
}