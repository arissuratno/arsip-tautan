<?php
header('Content-Type: application/json; charset=utf-8');

$file = __DIR__ . '/data_pegawai_arsip.json';

// Ambil data JSON dari body permintaan
$jsonData = file_get_contents('php://input');

if (!$jsonData) {
    echo json_encode(['status' => 'error', 'message' => 'Data kosong']);
    exit;
}

// Simpan ke file JSON
if (file_put_contents($file, $jsonData)) {
    echo json_encode(['status' => 'success', 'message' => 'Data berhasil disimpan ke server']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan data']);
}
?>
