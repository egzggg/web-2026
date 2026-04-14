<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method !== 'POST') {
    http_response_code(405); 
    echo "Только POST запрос";
    json_encode(["error" => "Invalid Request"]);
    exit;
}

$json = file_get_contents('php://input');
$data = json_decode($json, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo "невалидный JSON";
    echo json_encode(["error" => "Invalid JSON"]);
    exit;
}

$image = $data['image'];

if (!isset($image)) {
    http_response_code(400);
    echo "Пустой image";
    echo json_encode(["error" => "Invalid Image"]);
    exit;
}

if (!is_string($image)) {
    http_response_code(400);
    echo "Невалидный тип";
    echo json_encode(["error" => "Invalid type"]);
    exit;
}

$image = str_replace('data:image/png;base64,', '', $image);
$imageBin = base64_decode($image, true);

if ($imageBin === false) {
    http_response_code(400);
    echo "Невалидный base64";
    echo json_encode(["error" => "Invalid base64"]);
    exit;
}

$fileName = 'static/' . uniqid() . '.png';

file_put_contents($fileName, $imageBin);

echo json_encode([
    "status" => "ok",
    "path" => $fileName
]);