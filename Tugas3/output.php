<?
    session_start();
    if ($_SESSION['submit'] != true)
    {
        $name = $_SESSION['name'] ?? '';
        $sex = $_SESSION['sex'] ?? '';
        $bp = $_SESSION['bp'] ?? '';
        $bd = $_SESSION['bd'] ?? '';
        $rel = $_SESSION['rel'] ?? '';
        $add = $_SESSION['add'] ?? '';
    }
?>
<html lang="en">
<head>
    <title>My Biodata</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    
    <div class="container">
        <p class="title">MY BIOADATA</p>
        <p class="subtitle">Silahkan Lihat Data Diri Anda Di Bawah Ini.</p>
        <div>
            <p>Nama Lengkap:<?= $name ?></p>
        </div>
        <div>
            <p>Jenis Kelamin:<?= $sex ?></p>
        </div>
        <div>
            <p>Tempat Tanggal Lahir:<?= $bp ?>, <?= $bd ?></p>
        </div>
        <div>
            <p>Agama: <?= $rel ?></p>
        </div>
        <div>
            <p>Alamat: <?= $add ?></p>
        </div>
          
    </div>
       
</body>
</html>
