<?php
    
    require_once('Medoo.php');
    use Medoo\Medoo;

$database = new Medoo([
    'type' => 'mysql',
	'host' => 'localhost:3307',
	'database' => 'emprestame',
	'username' => 'root',
	'password' => '',
]);

?>