<?php

$payload = [
    "data" => "https://marquis.it.com",
    "output_format" => "PNG",
    "pixels_per_module" => 20,
    "margin" => 0,
    "ecc_level" => "H",
    "dark_color_hex" => "#000000",
    "light_color_hex" => "#FFFFFF",
    "draw_quiet_zones" => true,
    "image_base64" => "",
    "logo_size_percent" => 20
];

$ch = curl_init("https://api.myapi.rest/api/qrcode/generate");

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer <API_KEY>",
        "Content-Type: application/json"
    ],
    CURLOPT_POSTFIELDS => json_encode($payload)
]);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
