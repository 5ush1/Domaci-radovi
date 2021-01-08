<?php 
require_once 'gmail.php';
require_once 'yahoo.php';

class mail{
	public function sendEmail(string $mail, string $senderEmail, string $reciverEmail, string $subject, string $message, string $sentAt, string $recivedOn, $protocol = null, $secure = false, $spam = null){
		if ($mail = "gmail") {
			$gmail1 = new gmail($senderEmail, $reciverEmail, $subject, $message, $sentAt, $recivedOn, $secure, $spam);
		}elseif ($mail = "yahoo") {
			$yahoo1 = new yahoo($senderEmail, $reciverEmail, $subject, $message, $sentAt, $recivedOn, $protocol);
		}

	}
}

