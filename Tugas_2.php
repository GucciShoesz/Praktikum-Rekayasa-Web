<?php
// Membuat variabel array
$arrayData = [
"nama" => "Nanda",
"usia" => 20,
"domisili" => "Semarang",
"hobi" => ["Game", "Workout", "Cooking"]
];

// Encode array ke format JSON
$jsonData = json_encode($arrayData);

// Decode 350N ke object dan array
$objectData = json_decode($jsonData);
$arrayDataDecoded = json_decode($jsonData, true);

// Mengakses nilai dari PHP Object
echo "Mengakses nilai dari PHP Object: ";
echo "Nama: " . $objectData->nama . " ";
echo "Usia: " . $objectData->usia . " ";
echo "Domisili:" . $objectData->domisili . " ";
echo "Hobi:" . implode(",", $objectData->hobi)."";

echo "\n";

// Mengakses nilai dari PHP Array
echo "Mengakses nilai dari PHP Array: ";
echo "Nama: " . $arrayDataDecoded['nama']."";
echo "Usia: " . $arrayDataDecoded['usia']."";
echo "Domisili: " . $arrayDataDecoded['domisili']."";
echo "Hobi: " . implode(", ", $arrayDataDecoded['hobi']);
?>