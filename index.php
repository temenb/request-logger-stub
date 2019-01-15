<?php

$data = date('Y-d-m');
$data = [
    '$_SERVER' => $_SERVER,
    '$_REQUEST' => $_REQUEST,
];

file_put_contents('log/' . $data . '.log', $data, FILE_APPEND);
