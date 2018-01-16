<?php

function getRealIpAddr() {
  if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip=$_SERVER['HTTP_CLIENT_IP']; // share internet
  } elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip=$_SERVER['HTTP_X_FORWARDED_FOR']; // pass from proxy
  } else {
    $ip=$_SERVER['REMOTE_ADDR'];
  }
  return $ip;
}

function gravatar($email, $size) {
	$email = md5($email);
	return "https://www.gravatar.com/avatar/{$email}?s={$size}";
}