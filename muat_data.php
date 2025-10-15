<?php
header('Content-Type: application/json; charset=utf-8');

$file = __DIR__ . '/data_pegawai_arsip.json';

if (!file_exists($file)) {
    echo json_encode([]);
    exit;
}

$data = file_get_contents($file);
echo $data;
?>
