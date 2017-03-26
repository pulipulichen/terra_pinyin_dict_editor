<?php

$dicts = array();
$i = 0;

//print_r($_POST);

while (isset($_POST["dict_key_" . $i])) {
    $key = $_POST["dict_key_" . $i];
    $key = trim($key);
    $value = $_POST["dict_value_" . $i];
    $value = trim($value);
    if ($key === "" || $value === "") {
        $i++;
        continue;
    }
    
    $dicts[] = array($key, $value);
    $i++;
}
//print_r($dicts);

include 'config.php';
include 'function.php';

set_dict($dicts);

// @TODO 重新啟動小狼毫
$output = shell_exec($CONFIG["deploy"]);
//echo $output;

header("Location: index.php");
