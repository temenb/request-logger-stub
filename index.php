<?php

const _FILE_EXTENSION = '.log';
$filename = 'log/' . date('Y-d-m') . _FILE_EXTENSION;
$data = [
    '$_SERVER' => $_SERVER,
    '$_REQUEST' => $_REQUEST,
];
//$result = file_put_contents($filename, "\n\n" . json_encode($data), FILE_APPEND);
$result = file_put_contents($filename, "\n\n" . var_export($data, true), FILE_APPEND);
if (!$result) {
    echo 'Unable to write log file';
}

include $filename;