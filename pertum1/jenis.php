<?php
// Membuat array asosiatif dengan variabel $hargaBuah
$hargaBuah = array(
    "apel" => 3000,
    "pisang" => 2000,
    "jeruk" => 4000
);

// Menampilkan isi array
foreach($hargaBuah as $buah => $harga) {
    echo "Harga $buah adalah Rp. $harga\n";
}

// Membuat array multidimensi
$mahasiswa = array(
    array(
        "nama" => "Budi",
        "umur" => 20,
        "jurusan" => "Teknik Informatika"
    ),
    array(
        "nama" => "Siti",
        "umur" => 22,
        "jurusan" => "Sistem Informasi"
    ),
    array(
        "nama" => "Ahmad",
        "umur" => 21,
        "jurusan" => "Teknik Komputer"
    )
);

// Menampilkan isi array multidimensi
foreach($mahasiswa as $mhs) {
    echo "Nama: " . $mhs["nama"] . ", Umur: " . $mhs["umur"] . ", Jurusan: " . $mhs["jurusan"] . "\n";
}
?>
