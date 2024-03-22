<?php
$mahasiswa = [
    [
    "nama" => "Naruto Uzumaki",
    "nrp" => "202401001",
    "email" => "naruto@konoha.com",
    "jurusan"=> "Kelas Sharingan"
    ],
    [
    "nama" => "Sasuke Uchiha",
    "nrp" => "202401002",
    "email" => "sasuke@konoha.com",
    "jurusan"=> "Kelas Chidori"
    ],
    [
    "nama" => "Sakura Haruno",
    "nrp" => "202401003",
    "email" => "sakura@konoha.com",
    "jurusan"=> "Kelas Healing"
    ],
    [
    "nama" => "Kakashi Hatake",
    "nrp" => "202401004",
    "email" => "kakashi@konoha.com",
    "jurusan"=> "Kelas Strategi"
    ],
    [
    "nama" => "Itachi Uchiha",
    "nrp" => "202401005",
    "email" => "itachi@konoha.com",
    "jurusan"=> "Kelas Genjutsu"
    ],
    [
    "nama" => "Hinata Hyuga",
    "nrp" => "202401006",
    "email" => "hinata@konoha.com",
    "jurusan"=> "Kelas Byakugan"
    ],
    [
    "nama" => "Jiraia",
    "nrp" => "202401007",
    "email" => "Jiraia@konoha.com",
    "jurusan"=> "Kelas Sennin"
    ],
    [
    "nama" => "Madara Uchiha",
    "nrp" => "202401008",
    "email" => "madara@konoha.com",
    "jurusan"=> "Kelas Rinnegan"
    ],
    [
    "nama" => "Hashirama Senju",
    "nrp" => "202401009",
    "email" => "hashirama@konoha.com",
    "jurusan"=> "Kelas Mokuton"
    ],
    [
    "nama" => "Orocimaru",
    "nrp" => "202401010",
    "email" => "orocimaru@konoha.com",
    "jurusan"=> "Kelas Edo Tensei"
    ]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa Konoha</title>
</head>

<body>
    <h3>Daftar Mahasiswa Universitas Konoha</h3>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>

</html>