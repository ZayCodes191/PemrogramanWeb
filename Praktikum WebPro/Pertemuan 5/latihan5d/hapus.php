<?php
    require 'php/functions.php';
    $id = $_GET['id'];
    // echo hapus($id);
    if(hapus($id)>0){
        echo "<script>
            alert('data berhasil dihapus!');
            document.location.href='admin.php'
        </script>";
    }else{
        echo "<script>
            alert('Gagal menghapus data');
            document.location.href='admin.php'
        </script>";
    }
?>