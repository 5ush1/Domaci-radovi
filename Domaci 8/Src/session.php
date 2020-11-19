<?php 



if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
function setSessionData(string $key, $value): void
{
	$_SESSION[$key] = $value;
}

function sessionKeyExists(string $key): bool
{
	if (array_key_exists($key, $_SESSION)) {
		return true;
	}
	return false;
}

function addToSession(string $key, $value): void
{
	if (!sessionKeyExists($key)) {
		$_SESSION[$key] = [];
	}
	array_push($_SESSION[$key], $value);
}

function getValues($key)
{
	if (!sessionKeyExists($key)) {
		return [];
	}
	return $_SESSION[$key];
}