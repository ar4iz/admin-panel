<?php
$htmlfiles = glob("../../*.html");
$response = [];

foreach ($htmlfiles as $htmlfile) {
	array_push($response, basename($htmlfile));
}

echo json_encode($response);

