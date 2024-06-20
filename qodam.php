
<?php
// Daftar nama-nama khodam
$qodamNames = array(
    array("img"=>"img/ngawi1.jpeg","kodam"=>"Si Bibir Tebal"),
    array("img"=>"img/ngawi2.jpeg","kodam"=>"Si Imoet"),
    array("img"=>"img/ngawi3.jpeg","kodam"=>"Mas Manuk"),
    array("img"=>"img/munyuk.jpg","kodam"=>"MUnyuk"),
    array("img"=>"img/sigit rendang.jpg","kodam"=>"Sigit Rendang"),
    array("img"=>"img/farhan kebab.jpeg","kodam"=>"Farhan Kebab"),
    array("img"=>"img/laba-laba sunda.jpeg","kodam"=>"Laba laba Sunda"),
    array("img"=>"img/icon.jpeg","kodam"=>"Windah Batubara"),
    array("img"=>"img/ambatron.gif","kodam"=>"Ambatron"),
    array("img"=>"img/bjir.jpg","kodam"=>"Anak dajjal"),
    array("img"=>"img/celeng.jpg","kodam"=>"Celeng Balap"),
    array("img"=>"img/cukurukuk.jpg","kodam"=>"Cukurukuk"),
    array("img"=>"img/dontol.jpg","kodam"=>"Dontol"),
    array("img"=>"img/epep.jpg","kodam"=>"Player Ep Ep"),
    array("img"=>"img/gasing.jpg","kodam"=>"El Gasing"),
    array("img"=>"img/icikiwir.jpeg","kodam"=>"Icikiwir"),
    array("img"=>"img/israel.jpg","kodam"=>"Zionist Is Real"),
    array("img"=>"img/jawir.jpg","kodam"=>"Jawir"),
    array("img"=>"img/johan.jpeg","kodam"=>"Johan Liebert"),
    array("img"=>"img/justinus.jpg","kodam"=>"Kuch Justin"),
    array("img"=>"img/kairi.jpeg","kodam"=>"Kairi Kumar"),
    array("img"=>"img/kevin.jpg","kodam"=>"Kevin Lontong"),
    array("img"=>"img/kucing sigma.jpg","kodam"=>"Kucing Sigma"),
    array("img"=>"img/laba laba.jpg","kodam"=>"Laba laba gurun sahara"),
    array("img"=>"img/laba laba sunda.jpg","kodam"=>"Laba laba sunda"),
    array("img"=>"img/manusia silver.jpg","kodam"=>"Manusia Silver"),
    array("img"=>"img/marwoto.jpg","kodam"=>"Marwoto S.Pd"),
    array("img"=>"img/mesi.jpg","kodam"=>"El Cekik"),
    array("img"=>"img/mrbuas.jpg","kodam"=>"Mr Buast"),
    array("img"=>"img/mujianto.jpg","kodam"=>"Mujianto  S.Pd"),
    array("img"=>"img/nguwawor.jpg","kodam"=>"Nguwawor"),
    array("img"=>"img/pembalap.jpg","kodam"=>"Pembalap"),
    array("img"=>"img/peshate.jpg","kodam"=>"PE ES HA TE"),
    array("img"=>"img/Priasigma.jpg","kodam"=>"Pria Sigma"),
    array("img"=>"img/psht.jpg","kodam"=>"PE ES HA TE"),
    array("img"=>"img/punk.jpg","kodam"=>"Kim Jong-Punk "),
    array("img"=>"img/rahmat.jpg","kodam"=>"Rahmat Tahalu"),
    array("img"=>"img/roger.jpg","kodam"=>"Roger Sumastra"),
    array("img"=>"img/scp.jpg","kodam"=>"SCP-69"),
    array("img"=>"img/sempak.png","kodam"=>"Sempak Gusion"),
    array("img"=>"img/sigma.jpg","kodam"=>"Pria Sigma"),
    array("img"=>"img/skibidi.png","kodam"=>"Skibidi Toilet"),
    array("img"=>"img/sosokhitam.jpg","kodam"=>"Makhluk Hitam"),
    array("img"=>"img/towel.jpg","kodam"=>"Bung Towel"),
    array("img"=>"img/triomacan.jpg","kodam"=>"Trio Macan"),
    array("img"=>"img/vincent.jpg","kodam"=>"Pak Vinsen"),
    array("img"=>"img/wongireng.jpg","kodam"=>"Wong Ireng"),
    array("img"=>"img/bandar.jpeg","kodam"=>"Bandar Bokep"),
);
    // Tambahkan nama-nama khodam lainnya sesuai kebutuhan
$items=array("img/ngawi1.jpeg","img/ngawi2.jpeg","img/ngawi3.jpeg");
// Fungsi untuk mengembalikan nama khodam secara acak
function getRandomQodam() {
    global $qodamNames;
    $randomIndex = array_rand($qodamNames);
    return $qodamNames[$randomIndex];
}
?>
