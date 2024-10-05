<?php
//membuat variabel array
$arrayData = [
    "nama" => "Alfian",
    "usia" => 24,
    "pekerjaan" => "mahasiswa",
    "hobi" => ["Bermain Game", "Makan"]
];
$arrayData1 = '{
    "nama" : "Alfian",
    "usia": 24,
    "pekerjaan" : "mahasiswa",
    "hobi" : ["Bermain Game", "Makan"]
}';
//encode array ke format JSON
$jsonData = json_encode($arrayData);
echo "data dalam format JSON: ". $jsonData. "<br><br>";

// Decode JSON kembali ke array
$decodeData = json_decode($arrayData1);
echo "data dalam format JSON: ";
echo "nama: ". $decodeData->nama;
echo ", usia: ". $decodeData->usia;
echo ", pekerjaan: ". $decodeData->pekerjaan;
echo ", hobi: ";
foreach ($decodeData->hobi as $hobi) {
    echo $hobi.", ";
}

?>