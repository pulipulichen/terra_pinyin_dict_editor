<?php

function get_dict () {
    $file_content = file_get_contents($CONFIG["terra_pinyin.mine.dict.yaml"]);
    $needle = "# 自定義的字詞";
    $pos = mb_strpos($file_content, $needle);
    if ($pos === FALSE) {
        return array();
    }
    
    $dict_text = mb_substr($pos + mb_strlen($needle));
    $lines = explode("\n", $dict_text);
    
    $dict = array();
    foreach ($lines AS $line) {
        $dict[] = explode("\t", $line);
    }
    return $dict;
}   // function get_dict () {
