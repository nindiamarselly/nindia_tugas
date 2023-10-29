<!DOCTYPE html>
<html>
<head>
    <title>latihan3a</title>
    <style>
        .highlight {
            color: #1A0547;  
            font-weight: bolder;
            font-style : italic;
            text :28px;
        }
    </style>
</head>
<body>
    <?php
    function ganti_Style($tulisan, $kelas) {
        
        return '<span class="' . $kelas . '">' . $tulisan . '</span>';
    }

    $tulisan = "Hello World! Here I come!";
    $kelas = "highlight"; 

    $styledText = ganti_Style($tulisan, $kelas);
    echo $styledText;
    ?>
</body>
</html>
