<?php
$user = $_POST["user"];
$first = $_POST["fristname"];
$last = $_POST["lastname"];
$file = "data.json";

$json = json_decode(file_get_contents($file),TRUE);

$json[$user] = array("first" => $first, "last" => $last);

file_put_contents($file, json_encode($json));

?>