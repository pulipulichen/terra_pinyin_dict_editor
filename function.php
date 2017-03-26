<?php

//require('config.php');

function get_dict() {
    include 'config.php';
    $file_content = file_get_contents($CONFIG["terra_pinyin.mine.dict.yaml"]);
    $needle = "# 自定義的字詞";
    $pos = mb_strpos($file_content, $needle);
    if ($pos === FALSE) {
        return array();
    }
    
    $dict_text = mb_substr($file_content, $pos + mb_strlen($needle));
    $dict_text = trim($dict_text);
    $lines = explode("\n", $dict_text);
    
    $dict = array(array("", ""));
    foreach ($lines AS $line) {
        $dict[] = explode("\t", $line);
    }
    return $dict;
}   // function get_dict () {

function set_dict($dicts) {
    include 'config.php';
    $file_content = file_get_contents($CONFIG["terra_pinyin.mine.dict.yaml"]);
    $needle = "# 自定義的字詞";
    $pos = mb_strpos($file_content, $needle);
    if ($pos === FALSE) {
        return array();
    }
    
    $dict_header = mb_substr($file_content, 0, $pos + mb_strlen($needle));
    
    $dict_header = trim($dict_header) . "\n";
    
    $dict_text = [];
    foreach ($dicts AS $dict) {
        $dict_text[] = implode("\t", $dict);
    }
    
    $dict_text = $dict_header . implode("\n", $dict_text);
    
    //echo $dict_text;
    
    file_put_contents($CONFIG["terra_pinyin.mine.dict.yaml"], $dict_text);
    file_put_contents($CONFIG["terra_pinyin.mine.dict.yaml_backup"], $dict_text);
}   // function get_dict () {