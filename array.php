<?php

$huruf = ["A" , "B" , "C" , "D" , "E" , "F" , "G" , "H" , "J", "I" , "K" , "L" , "M",
         "N" , "O" , "P" , "Q" , "R" , "S" , "T" , "U" , "V" , "W" , "X" , "Y" , "Z"];

$MataP = [["Pendidikan Agama dan Bukti Pekerti", "Pendidikan Pancasila", "Bahasa Indonesia", "Matematika"], 
        ["Bahasa Inggris", "Dasar-dasar Kejuruan RPL"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .bulat{
            height : 80px;
            width : 80px;
            border-radius : 50%;
            background: red ;
            color : white ;
            float : left ;
            text-align : center ;
            line-height : 80px ;
            margin : 10px ;
        }
        .kotak{
            height : 200px;
            width : 300px;
            background : orange;
            border-radius : 20px 0px 20px 0px;
            color : white;
            float : left;
            text-align : center;
            line-height : 200px;
            margin : 10px;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
      <?php for( $NilaiA = 0; $NilaiA < count($huruf); $NilaiA++ ) : ?>
        <div class="bulat"><?= $huruf[$NilaiA]; ?></div>
        <?php endfor; ?>
        <div class="clear"></div>

        <h1><?php echo "Mata Pelajaran - X RPL 1" ?></h1>
      <?php foreach( $MataP as $MataNajwa ) : ?>
      <?php foreach( $MataNajwa as $MataBatin ) : ?>
        <div class="kotak"><?= $MataBatin; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
        <?php endforeach; ?>
        
</body>
</html>