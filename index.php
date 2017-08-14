<?php
require_once 'vendor/autoload.php';

$app=new \Slim\Slim();

$app->get('/profile/facebook/:id',function($id){
	$var1='https://graph.facebook.com/'.$id.'?access_token=EAADxhix3hxQBAHNchTq98EdzjjFqpnKHeIZCyGYtzObZAdanCKmIHGcAZCX9BEGzcZAZBcQF0h7a9C8kjLioOhpEzirrPRYdoSJgZBkKFItxTBz69eley0iTXlgeoouC3I4fQNTRnV2jNlHFh2Usl3aS4HfzdMjKXopkN27vAqIrC06W65nLt9BmUUe5qqdCD4h2xKZANqxXqEF6nrauoUMJ1ZBzqsW4GhsZD';
	$data=json_decode(file_get_contents($var1));	
	echo 'ID:'.$data->id.'<br>';
	echo 'Name:'.$data->name.'<br>';
	echo 'En JSON<br>';
	$datos=array("id"=>$data->id,"nombre"=>$data->name);
	echo json_encode($datos);

	
});

$app->run();
