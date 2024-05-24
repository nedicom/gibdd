<?php

$myphone = '01233215678';

if (isset($_POST['mes2'])) {
    $myphone = $_POST['mes2'];
}

$sub = 'Заявка с сайта https://gibdd.nedicom.ru/ - пьяный руль - ' . $_POST['mes'];

$env = parse_ini_file('.env');



$conn = mysqli_connect($env['DB_MYSQLIHOST'], $env['DB_MYSQLINAME'], $env['DB_MYSQLIPASS'], $env['DB_MYSQLINAME']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO leads (source, description, phone, lawyer, created_at, responsible, status, service)
    VALUES ('https://gibdd.nedicom.ru/', '$sub', '$myphone', 80, CURRENT_TIME(), 80, 'поступил', 11)"; //82 - данил, 11 - консультация
$conn->query($sql);
