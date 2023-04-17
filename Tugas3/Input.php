<?php
    session_start();
                                        
    if(!empty($_POST['name']) && !empty($_POST['sex']) && !empty($_POST['bp'] && !empty($_POST['bd'])) && !empty($_POST['rel']) && !empty($_POST['add']))
    {                                    
        $_SESSION["name"] = $name;
        $_SESSION["sex"] = $sex;
        $_SESSION["bp"] = $bp;
        $_SESSION["bd"] = $bd;
        $_SESSION["rel"] = $rel;
        $_SESSION["add"] = $add;

        header('Location: output.php');
        exit();                           
    }
?>

<html lang="en">
<head>
    <title>Form Biodata</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="methods.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="container">
        <p class="title">ADD BIODATA</p>
        <p class="subtitle">Silahkan Masukan Data Diri Anda Di Bawah Ini.</p>
        <form action="output.php" method="post" id="form">
            <label class="sz-20" for="name">Nama Lengkap</label> <br>
            <input class="sz-20 wdt100" type="text" id="name" name="name" placeholder="Nama Lengkap" required>
            <br>
            
            <label class="sz-20" for="sex">Jenis Kelamin</label> <br>
            <select class="sz-20  wdt100" id="sex" name="sex" required>
                <option value="" hidden>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <br>

            <label class="sz-20" for="bp">Tempat Lahir</label> <br>
            <input class="sz-20 wdt100" type="text" id="bp" name="bp" placeholder="Tempat Lahir" required>
            <br>

            <label class="sz-20" for="bd">Tanggal Lahir</label> <br>
            <input class="sz-20 wdt100" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="bd" name="bd" placeholder="Tanggal Lahir" required>
            <br>
            
            <label class="sz-20" for="rel">Agama</label> <br>
            <select class="sz-20 wdt100" id="rel" name="rel" required>
                <option value="" hidden>Agama</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Kristen">Kristen</option>
            </select>
            <br>
            <label class="sz-20" for="add">Alamat Lengkap</label> <br>
            <textarea class="sz-20 wdt100" id="add" name="add" placeholder="Alamat Lengkap" required></textarea>
            <br>
            <div class="modal fade" id="formModal" role="dialog">
                <div class="modal-dialog">
                    <div id="content">
                        <div id="header" class="mrg-btm-20">
                            <h4 id="title">Tambah Biodata</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div>
                        <h5 class="mrg-btm-20" id="subtitle">Anda Akan Menambahkan Data Biodata Baru</h5>
                        </div>
                        <div id="footer">
                            <button id="cancelModal" data-dismiss="modal">Cancel</button>
                            <button type="submit" id="addModal">Add</button>
                        </div>
                    </div>
                </div>        
            </div>
        </form>
        <button class="sub" id="submit" data-target="#formModal" onclick="submitForm()">+ Add Data</button>
    </div>
    </div>
</body>
</html>