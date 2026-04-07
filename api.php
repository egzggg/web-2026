<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method !== 'POST') {
    http_response_code(405); 
    echo "Только POST запрос";
    exit;
}

$json = file_get_contents('php://input');
$data = json_decode($json, true);
    
$image = $data['image'];

$image = str_replace('data:image/png;base64,', '', $image);
$imageBin = base64_decode($image);

$fileName = 'static/' . uniqid() . '.png';

file_put_contents($fileName, $imageBin);

echo json_encode([
    "status" => "ok",
    "path" => $fileName
]);