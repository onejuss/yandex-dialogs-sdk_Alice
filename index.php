<?php
// functions here
include('functions.php');

// получаем входящий API-запрос
$apiRequestArray = json_decode(trim(file_get_contents('php://input')), true);

// print_r(json_encode($apiRequestArray));

$request = $apiRequestArray['request'];
$session = $apiRequestArray['session'];
$version = $apiRequestArray['version'];

// сообщение которое отправил пользователь
$command = $request['command'];

// id сообщения
$message_id = $session['message_id'];
// id сессии
$session_id = $session['session_id'];
// id пользователя
$user_id = $session['user_id'];

// Приветствие
include('greeting.php');

// тарифные планы
include('tariffs.php');


header('Content-Type: application/json');
echo $give_response;