<?php

$word = $_GET['q'];

$content = file_get_contents('http://www.eki.ee/dict/ekss/index.cgi?Z=json&Q=' . $word);
$content = json_decode($content);

header("Access-Control-Allow-Origin: *");
echo $content->result;