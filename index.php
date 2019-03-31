<?php

const FILE_EXTENSION = '.log';
const LOG_DIR = 'log/';

$filename = LOG_DIR . date('Y-d-m') . FILE_EXTENSION;
$data = [
    '$_SERVER' => $_SERVER,
    '$_REQUEST' => $_REQUEST,
];
//$result = file_put_contents($filename, "\n\n" . json_encode($data), FILE_APPEND);
$result = file_put_contents($filename, "\n\n" . var_export($data, true), FILE_APPEND);
//if (!$result) {
//    echo 'Unable to write log file';
//}
