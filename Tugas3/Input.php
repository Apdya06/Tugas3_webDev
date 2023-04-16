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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
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
            <button class="sub" type="submit" id="submit" data-toggle="modal" data-target="#myModal">+ Add Data</button>
        </form>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div id="modal-content">
                <div id="modal-header">
                    <h4 id="modal-title">Tambah Biodata</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div>
                   <h5 id="modal-subtitle">Anda Akan Menambahkan Data Biodata Baru</h5>
                 </div>
                <div id="modal-footer">
                    <button id="cancelModal" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="addModal">Add</button>
                </div>
            </div>
        </div>        
    </div>
        <?
            // if($_SERVER["REQUEST_METHOD"] === "POST")
            if(isset($_POST['submit']))
            {
                if(isset($_POST['name']))
                {
                    $name = $_POST['name'];
                }
                else{
                    $error = "Input Nama Tidak Boleh Kosong";
                }

                if(isset($_POST['sex']))
                {
                    $sex = $_POST['sex'];
                }
                else{
                    $error = "Pilih Salah Satu Jenis Kelamin";
                }

                if(isset($_POST['bp']))
                {    
                    $bp = $_POST['bp'];
                }
                else{
                    $error = "Input Tempat Lahir Tidak Boleh Kosong";
                }

                if(isset($_POST['bd']))
                {
                    $bd = $_POST['bd'];
                }
                else{
                    $error = "Input Tanggal Lahir Tidak Boleh Kosong";
                }

                if(isset($_POST['rel']))
                {
                    $rel = $_POST['rel'];
                }
                else{
                    $error = "Pilih Salah Satu Agama";
                }

                if(isset($_POST['add']))
                {
                   $add = $_POST['add'];
                }
                else{
                    $error = "Input Alamat Lengkap Tidak Boleh Kosong";
                }

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

            var name = document.getElementById("name").value;
            var sex = document.getElementById("sex").value;
            var bp = document.getElementById("bp").value;
            var bd = document.getElementById("bd").value;
            var rel = document.getElementById("rel").value;
            var add = document.getElementById("add").value;

            // if (name == '' || sex == '' || bp == '' || bd == '' || rel == '' || add == '') {
            //     alert('Mohon isi semua field terlebih dahulu.');
            // } else {
                // Tampilkan modal jika semua field sudah diisi
            // form.addEventListener('submit', function(e) {
            //     e.preventDefault();
            //     modal.style.display = 'flex';
            // });

            // submitModalBtn.addEventListener('click', function(event) {
            //     form.submit();
            // });

            // submitBtn.addEventListener('click', function() {
            //     form.submit();
            // });
            
            // }
            
            
        </script>
    </div>
</body>
</html>
