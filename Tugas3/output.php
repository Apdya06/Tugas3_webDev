<?php
    session_start();

    $name = '';
    $sex = '';
    $bp = '';
    $bd = '';
    $rel = '';
    $add = '';

    if (isset($_SESSION["name"]))
    {
        $name = $_SESSION["name"] ?? '';
        $sex = $_SESSION["sex"] ?? '';
        $bp = $_SESSION["bp"] ?? '';
        $bd = $_SESSION["bd"] ?? '';
        $rel = $_SESSION["rel"] ?? '';
        $add = $_SESSION["add"] ?? '';
    }

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $bp = $_POST['bp'];
        $bd = $_POST['bd'];
        $rel = $_POST['rel'];
        $add = $_POST['add'];
    }
?>
<html lang="en">
<head>
    <title>My Biodata</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="methods.js"></script>
</head>
<body>
    <div class="container">
        <p class="title">MY BIOADATA</p>
        <p class="subtitle">Silahkan Lihat Data Diri Anda Di Bawah Ini.</p>
        <div class="successNotif">
            <div id="header">
                <h4>Data Kamu Berhasil Disimpan!</h4>
                <button type="button" class="close" onclick="this.parentNode.parentNode.remove()">&times;</button>
            </div>
            <div>
                <p class="mrg-0 pad-btm-10" id="msg">Data Berhasil Disimpan didalam cookies/session</p>
            </div>
        </div>
        <div class="even">
            <p>Nama Lengkap:    <?= $name ?></p>
        </div>
        <div class="odd">
            <p>Jenis Kelamin:   <?= $sex ?></p>
        </div>
        <div class="even">
            <p>Tempat Tanggal Lahir:    <?= $bp .", ". $bd ?></p>
        </div>
        <div class="odd">
            <p>Agama:   <?= $rel ?></p>
            
        </div>
        <div class="even">
            <p>Alamat:  <?= $add ?></p>
        </div>
        <div id="footer">
            <button id="goBack" onclick="goBack()">Kembali</button>   
        </div>

    </div>
</body>
</html>