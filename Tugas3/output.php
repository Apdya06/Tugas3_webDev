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
    <style>
        *{
            border-radius: 5px;
        }
        body{
            font-family: sans-serif;
            background-color: black;
        }
        .container {
            width: 50%;
            padding: 70px 70px 70px 50px;
            margin-right: auto;
            margin-left: auto;
            align-content: center;
            justify-content: center;
            background-color: rgb(247,247, 251);
            border-radius: 5%;
        }
        .title{
            font-size: 55px;
            font-weight: 600;
            margin: auto;
        }
        .subtitle{
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 25px;
        }
        .sz-20{
            font-size: 20px;
        }
        .wdt100{
            margin-top: 5px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: content-box;
            padding: 10px;
            color: gray;
            border: solid 1px gray;
        }
        .wdt100 :checked{
            color: gray;

        }
        .sub{
            width: 20%;
            box-sizing: content-box;
            padding: 10px 20px;
            margin-top: 15px;
            margin-left: 75%;
            background-color: rgb(56, 161, 105);
            color: white;
            border: solid 1px gray;
            font-size: 22px;
        }
    </style>
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