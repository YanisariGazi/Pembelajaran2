<?php 


// array
//  varieble yang bisa menampung banyak nilai.

//  dalam array bisa menggunakan pengulangan dengan menggunakan 
// for(){

// }
// dan 
// foreach(){

// }

// example:
// cara lama.
// $array1 = array("senin", "selasa", "rabu");
// cara baru.
// $array2 = ["kamis", "jumat", "sabtu"];

// menampilkan array.
// var_dump($array1);//penampilan lengkap seperti berapa isi elementnya, apa tipedatanya, berapa hurufnya
// print_r($array2);//lebih simplenya dri var_dump
//tidak bisa menggunakan echo untuk menampilkan semua isi array, kalau cuman satu bisa.

//menampilkan satu element 
// echo $array1[0];format tulisannya adalah echo $variable_array[isi yang mana yang mau diampilkan array dimulai dari 0 dari kiri];
// echo "<br>";
// echo $array2[2];

//menambahkan 1 isi(element) array
// var_dump($array2);// sebelum ditambahkan
// $array2[] = "minggu";//format tulisanya $nama_array[] = "element yng mau ditambahkan"  ;(sesudah ditambahkan)
// var_dump($array2);

//array multidimensi
// $array3 = [[1,2,3],[4,5,6],[7,8,9]];
// echo "$array3[0][1]";








?>
<!-- array dengan perulangan  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width: 30px;
            height: 30px;
            background-color: blueviolet;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        div:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>
   <?php $array3 = [[1,2,3],[4,5,6],[7,8,9]];?>
     <?php 
     foreach($array3 as $arr) :?>
         <?php foreach($arr as $ar) :?>
             <div> <?= $ar; ?> </div>
         <?php endforeach; ?>
     <?php endforeach; ?>
</body>
</html>