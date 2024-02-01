<?php

$data = [
    [
        "NamaLengkap" => "Rasya",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl Karang anyar',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Belajar',
        'CitaCita' => 'Guru'
    ],
    [
        "NamaLengkap" => "Chelvin Yusuf Maulana",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl Mangga Besar',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Main LOL',
        'CitaCita' => 'Full stack'
    ],
    [
        "NamaLengkap" => "Riyadh",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl pintu airJuanda ',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Sports',
        'CitaCita' => 'Artis'
    ],
    [
        "NamaLengkap" => "Muhammad Agung Hidayat",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl Swiss',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Game',
        'CitaCita' => 'Full stack'
    ],
    [
        "NamaLengkap" => "Raja budiharjo",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl Brazil',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Ngaji',
        'CitaCita' => 'ustad'
    ],
    [
        "NamaLengkap" => "Dirga",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl karang anyar Sawah besar',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Ngoding',
        'CitaCita' => 'Pro player efef'
    ],
    [
        "NamaLengkap" => "Davin",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl Pintu api juanda',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Game',
        'CitaCita' => 'Pro player'
    ],
    [
        "NamaLengkap" => "Fahri",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl pintu air Juanda ',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Gitar',
        'CitaCita' => 'Gamer'
    ],
    [
        "NamaLengkap" => "Ilham",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl mangga besar Karang anyar',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Game',
        'CitaCita' => 'Software engginer'
    ],
    [
        "NamaLengkap" => "Asdi F.N",
        'Kelas' => 'X RPL 1',
        'Alamat' => 'Jl karanganyar mangga besar',
        'NISN' => '08231244678',
        'NomorWA' => '082312447878',
        'Hobi' => 'Main efef',
        'CitaCita' => 'Pro player Free fire'
    ]
    ];

?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
 </head>
 <body>
            <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>NISN</th>
                <th>Nomor WhatsApp</th>
                <th>Hobi</th>
                <th>Cita-Cita</th>
            </tr>
            <tr>
                <?php foreach($data as $Diri) : ?>
                    <td><?= $Diri["NamaLengkap"]; ?></td>
                <td><?= $Diri['Kelas']; ?></td>
                <td><?= $Diri['Alamat']; ?></td>
                <td><?= $Diri['NISN']; ?></td>
                <td><?= $Diri['NomorWA']; ?></td>
                <td><?= $Diri['Hobi']; ?></td>
                <td><?= $Diri['CitaCita']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
 </body>
 </html>


 <!-- Rangkuman -->
<!-- Jenis-Jenis Array di PHP
Array Terindeks:

Setiap item memiliki indeks integer yang dimulai dari 0.
Contoh: $listMahasiswa = ["Nurul Huda", "Wahid Abdullah", "Renza Ilhami"].
Array Asosiatif:

Item diidentifikasi oleh kunci (key) bertipe string.
Contoh: $mahasiswa = ['nama' => 'Nurul Huda', 'domisili' => 'Surabaya', 'jenis_kelamin' => 'Laki-laki'].
Array Multidimensi:

Array yang memiliki item berupa array lain.
Contoh: $histogram = [[1, 2, 3, 4, 5], [6, 7, 3, 9, 2], [3, 5, 1, 0, 5], [5, 8, 1, 3, 1]].
Manipulasi Array
Menampilkan Array:

Menggunakan indeks atau perulangan.
Menambahkan Item:

Menggunakan array_push() atau sintaks kurung siku ($array[] = 'nilai').
Menghapus Item:

Menggunakan array_pop() untuk menghapus item terakhir.
Menggabungkan Array:

Menggunakan array_merge() atau array unpacking (...).
Array Unpacking:

Menggabungkan array di tengah array lainnya.
Konversi Array:

Mengubah array asosiatif ke array terindeks dengan array_values().
Fungsi Explode dan Implode
Fungsi Explode:

Membagi string menjadi array berdasarkan delimiter tertentu.
Contoh: explode(" ", $mahasiswa).
Fungsi Implode:

Menggabungkan array menjadi string dengan perekat tertentu.
Contoh: implode(", ", $mahasiswa).
Pencarian, Filter, dan Pemetaan Array
Pencarian dengan array_search():

Mencari nilai dalam array dan mengembalikan indeksnya.
Filter Array dengan array_filter():

Menghasilkan array baru berdasarkan kriteria tertentu.
Contoh: $nilai30Kebawah = array_filter($nilaiSiswa, function ($item) { return $item['nilai'] <= 30; });
Pemetaan Array dengan array_map():

Mengaplikasikan fungsi ke setiap elemen array.
Contoh: $ratusan = array_map(function ($item) { return $item * 100; }, $array); -->