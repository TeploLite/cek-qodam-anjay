
<?php
// Daftar nama-nama khodam
$qodamNames = [
    "Air Cucian Beras",
    "Api Menyala",
    "Angin Sejuk",
    "Batu Karang",
    "Cahaya Bulan",
    "Daun Rimbun",
    "Embun Pagi",
    "Gurun Pasir",
    "Hujan Deras",
    "Pelangi Indah",
    "Sungai Mengalir",
    "Tanah Subur",
    "Sepeda Ontel",
    "Titid Terbang",
    "Layangan Putus",
    "Baju Robek",
    "Buaya Putih",
    "Kuntilanak merah",
    "Pocong Bambu",
    "Tuyul emas",
    // Tambahkan nama-nama khodam lainnya sesuai kebutuhan
];

// Fungsi untuk mengembalikan nama khodam secara acak
function getRandomqodam() {
    global $qodamNames;
    $randomIndex = array_rand($qodamNames);
    return $qodamNames[$randomIndex];
}
?>
