<?php
session_start();
if($_SESSION["auth"] != true) {
    header("HTTP/1.0 403 Forbidden");
    die;
}

$htmlfiles = glob("../../*.html");
$response = [];

foreach ($htmlfiles as $htmlfile) {
	array_push($response, basename($htmlfile));
}

echo json_encode($response);

