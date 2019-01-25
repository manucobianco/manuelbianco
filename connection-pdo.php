<?php
  $dbhost = 'localhost';
  $dbname = 'pdo';
  $dbusername = 'root';
  $dbpassword = ' *** ';

$link = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbusername, $dbpassword);

$createUser = $link->prepare('INSERT INTO USER (USER_NAME, USER_PASSWORD, USER_MAIL)
                              VALUES (:name, :pass, :mail)');

$createUser->execute([
  'name' => 'Manuel',
  'pass' => 'Manuel123',
  'mail' => 'manuel@gmail.com',
]);
