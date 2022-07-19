<?php

$data = [
    "action" => "create",
    "aksi" => "buat"
];

if (isset($data['action'])) {
    $action = $data['action'];
}else{
    $action = "nothing";
}

$aksi = $data["aksi"] ?? "Nothing"; //very simple

echo $action . PHP_EOL;
echo $aksi . PHP_EOL;