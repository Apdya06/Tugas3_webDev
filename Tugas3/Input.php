<?
    session_start();
    $name = '';
    $sex = '';
    $bp = '';
    $bd = '';
    $rel = '';
    $add = '';
    $error = '';
?>
<html lang="en">
<head>
    <title>Form Biodata</title>
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

        #modal{
            position: fixed;
            top: 50%;
            margin-left: auto;
            margin-right: auto;
            width: auto;
            height: auto;
            box-sizing: content-box;
            background-color: white;
            display: none;
            justify-content: center;
            align-items: center;
        }
        #modal-content
        {
            padding: 20px;
            text-align: center;
        }
        #modal-content p{
            margin: 0 0 20px;
        }
        #modal-content button {
            margin: 0 10px;
            padding: 5px 10px;
            cursor: pointer;
        }
        #cancelModal{
            background-color: rgb(237, 242, 237);
        }
        #addModal{
            background-color: rgb(49, 130, 206);
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="title">ADD BIODATA</p>
        <p class="subtitle">Silahkan Masukan Data Diri Anda Di Bawah Ini.</p>
        <form action="" method="post">
            <label class="sz-20" for="name">Nama Lengkap</label> <br>
            <input class="sz-20 wdt100" type="text" id="name" name="name" placeholder="Nama Lengkap" required>
            <br>
            
            <label class="sz-20" for="sex">Jenis Kelamin</label> <br>
            <select class="sz-20  wdt100" id="sex" name="sex" required>
                <option value="" hidden>Jenis Kelamin</option>
                <option value="male">Laki-Laki</option>
                <option value="female">Perempuan</option>
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
                <option value="islam">Islam</option>
                <option value="hindu">Hindu</option>
                <option value="buddha">Buddha</option>
                <option value="kristen">Kristen</option>
            </select>
            <br>

            <label class="sz-20" for="add">Alamat Lengkap</label> <br>
            <textarea class="sz-20 wdt100" id="add" name="add" placeholder="Alamat Lengkap" required></textarea>
            <br>
            <button class="sub" type="submit" id="submit">+ Add Data</button>

            <div id="modal">
                <div id="modal-content">
                    <p>Tambah Biodata</p>
                    <p>Anda Akan Menambahkan Data Biodata Baru</p>
                    <button id="cancelModal">Cancel</button>
                    <button id="addModal">Add</button>
                </div>
            </div>
        </form>
        <?
            if($_SERVER["REQUEST_METHOD"] === "POST")
            // if(isset($_POST['submit']))
            {
                // if(isset($_POST['name']))
                // {
                    $name = $_POST['name'];
                // }
                // else{
                //     $error = "Input Nama Tidak Boleh Kosong";
                // }

                // if(isset($_POST['sex']))
                // {
                    $sex = $_POST['sex'];
                // }
                // else{
                //     $error = "Pilih Salah Satu Jenis Kelamin";
                // }

                // if(isset($_POST['bp']))
                // {    
                    $bp = $_POST['bp'];
                // }
                // else{
                //     $error = "Input Tempat Lahir Tidak Boleh Kosong";
                // }

                // if(isset($_POST['bd']))
                // {
                    $bd = $_POST['bd'];
                // }
                // else{
                //     $error = "Input Tanggal Lahir Tidak Boleh Kosong";
                // }

                // if(isset($_POST['rel']))
                // {
                    $rel = $_POST['rel'];
                // }
                // else{
                //     $error = "Pilih Salah Satu Agama";
                // }

                // if(isset($_POST['add']))
                // {
                   $add = $_POST['add'];
                // }
                // else{
                //     $error = "Input Alamat Lengkap Tidak Boleh Kosong";
                // }

                $_SESSION['name'] = $name;
                $_SESSION['sex'] = $sex;
                $_SESSION['bp'] = $bp;
                $_SESSION['bd'] = $bd;
                $_SESSION['rel'] = $rel;
                $_SESSION['add'] = $add;

                header('Location: output.php');
                exit();
            }        
        ?>
        <script>
            const form = document.querySelector('form');
            const modal = document.getElementById('modal');
            const submitModalBtn = document.getElementById('addModal');
            const cancelModalBtn = document.getElementById('cancelModal');
            const submitBtn = document.getElementById('submit');

            form.addEventListener('submit', function(e) {
            e.preventDefault();
            modal.style.display = 'flex';
            });

            submitModalBtn.addEventListener('click', function() {
            form.submit();
            });

            cancelModalBtn.addEventListener('click', function() {
            modal.style.display = 'none';
            });

            submitBtn.addEventListener('click', function() {
            form.submit();
            });
        </script>
    </div>
</body>
</html>