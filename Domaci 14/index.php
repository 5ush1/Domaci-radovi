<?php 

// Klase: 
// Yahoo: Sender - Receiver (email), Subject, Message, SentAt, ReceivedOn,
// Gmail: Sender - Receiver (email), Subject, Message, SentAt, ReceivedOn, 


// 3 klasa: Mail, ima funkciju sendEmail
// * prima argument
// sendEmail("Gmail", "Subject...", "message..."...);
// -> ako je gmail instanciras novi Gmail
// -> ako je Yahoo instanciras novi Yahoo

// Bonus: 
// Gmail da ima: Secure (true/false), Spam, 
// Yahoo: protocol (http/https)

require_once 'mail.php';

$mail1 = new mail();
$mail1->sendEmail("yahoo", "nesto", "nesto", "nesto", "nesto", "nest", yahoo::PROTOCOL_HTTP);