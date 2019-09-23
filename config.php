<?php

return [
  'database' => [
    'name' => 'pos',
   	'username' => 'root',
   	'password' => '',
   	'connection' => 'mysql:host=localhost',
   	'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];

?>
