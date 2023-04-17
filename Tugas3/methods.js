function submitForm(){
    var name = $('#name').val();
    var sex = $('#sex').val();
    var bp = $('#bp').val();
    var bd = $('#bd').val();
    var rel = $('#rel').val();
    var add = $('#add').val();
    if(name.trim() == '' ){
        alert('Inout Nama Tidak Boleh Kosong');
        $('#name').focus();
        return false;
    }else if(sex.trim() == '' ){
        alert('Input Jenis Kelamin Tidak Boleh Kosong');
        $('#sex').focus();
        return false;
    }else if(bp.trim() == '' ){
        alert('Input Tempat Lahir Tidak Boleh Kosong');
        $('#bp').focus();
        return false;
    }else if(bd.trim() == '' ){
        
        alert('Input Tanggal Lahir Tidak Boleh Kosong');
        $('#bd').focus();
        return false;
    }else if(rel.trim() == '' ){
        alert('Input Agama Tidak Boleh Kosong');
        $('#rel').focus();
        return false;
    }else if(add.trim() == '' ){
        alert('Input Alamat Lengkap Tidak Boleh Kosong');
        $('#add').focus();
        return false;
    }
    else{
        $('#formModal').modal("show");
        $(function () {
            $('#addModal').on('click', function () {
                var add = $(this).val();
                $('#form').submit();                        
            });
        });
    }
}

function goBack()
{   
    window.history.back();
}
