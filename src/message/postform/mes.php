<?php

$conn = mysqli_connect("178.208.94.106", "crm", '904klfkFL:DlflrD4', "crm");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO leads (source, description, phone, lawyer, created_at, responsible, status, service)
    VALUES ('https://gibdd.nedicom.ru/', 'sub', '0005558889', 80, CURRENT_TIME(), 80, 'поступил', 11)"; //82 - данил, 11 - консультация
$conn->query($sql);

$sub = $_POST['mes'];

$myphone = '01233215678';

if (isset($_POST['myphone'])) {
    $myphone = $_POST['mes2'];
}

$env = parse_ini_file('.env');

$sub = 'Заявка с сайта https://gibdd.nedicom.ru/ - пьяный руль';

$conn = mysqli_connect($env['DB_MYSQLIHOST'], $env['DB_MYSQLINAME'], $env['DB_MYSQLIPASS'], $env['DB_MYSQLINAME']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO leads (source, description, phone, lawyer, created_at, responsible, status, service)
    VALUES ('https://gibdd.nedicom.ru/', 'sub', '0005558889', 80, CURRENT_TIME(), 80, 'поступил', 11)"; //82 - данил, 11 - консультация
$conn->query($sql);
?>
