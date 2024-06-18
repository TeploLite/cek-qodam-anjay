
<?php
// Daftar nama-nama khodam
$qodamNames = array(
    ("farahan kebab"),
    ("mas fais"),
    ("kicau mania"),
    // array("images"=>"img/ngawi3.jpeg",
    // "kodam"=>"kicau mania"),
    // Tambahkan nama-nama khodam lainnya sesuai kebutuhan
);
$items=array("img/ngawi1.jpeg","img/ngawi2.jpeg","img/ngawi3.jpeg");
// Fungsi untuk mengembalikan nama khodam secara acak
function getRandomQodam() {
    global $qodamNames;
    $randomIndex = array_rand($qodamNames);
    return $qodamNames[$randomIndex];
}
function getRandomItem() {
    global $items;
    $randomImages = array_rand($items);
    return $items[$randomImages];
}
?>
