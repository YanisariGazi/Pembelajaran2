<?php 
        $mahasiswa = [
            [
                
                "Nama"=>"Tsabit Djatmiko",
                "Umur"=>18,
                "Pendidikan terakhir"=>"Lulusan TK",
                "Gambar"=>"th.webp"
            ],
            [
                
                "Nama"=>"Luqman Hadiansyah",
                "Umur"=>19,
                "Pendidikan terakhir"=>"Tidak Sekolah",
                "Gambar"=>"th.webp"
            ]
        ];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend</title>
</head>
<body>
    
    

        <ul>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <li>
                    <a href="profil.php?nama=<?= $mhs["Nama"]; ?>&umur=<?= $mhs["Umur"]; ?>&pendidikan=<?= $mhs["Pendidikan terakhir"]; ?>&gambar=<?= $mhs["Gambar"]; ?>  " > <?= $mhs["Nama"]; ?> </a>
                </li>
            <?php endforeach; ?>
        </ul>
</body>
</html>