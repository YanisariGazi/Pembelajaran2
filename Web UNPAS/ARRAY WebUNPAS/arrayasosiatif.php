<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                "Umur"=>20,
                "Pendidikan terakhir"=>"Tidak Sekolah",
                "Gambar"=>"th.webp"
            ]
        ];
    
    ?>
    <table border="5">
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Pendidikan Terakhir</th>
            <th>Poto</th>
        </tr>
        <?php foreach($mahasiswa as $mhs) {?>
        <tr>
            <td><?= $mhs['Nama']; ?></td>
            <td><?= $mhs['Umur']; ?></td>
            <td><?= $mhs['Pendidikan terakhir']; ?></td>
            <td><?= $mhs['Gambar']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>