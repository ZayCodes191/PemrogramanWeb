<h3>Tambah Properti</h3>
<form action="" method="post">
    <ul>
        <li>
            <label>Gambar</label><br/>
            <input type="text" name="gambar">
        </li>
        <li>
            <label>Tipe Properti</label><br/>
            <input type="text" name="tipe">
        </li>
        <li>
            <label>Deskripsi</label><br/>
            <input type="text" name="deskripsi">
        </li>
        <li>
            <label>Harga</label><br/>
            <input type="text" name="harga">
        </li>
        <li>
            <label>Nama Pemilik</label><br/>
            <input type="text" name="nama">
        </li>
        <li>
            <label>Kontak Pemilik</label><br/>
            <input type="text" name="kontak">
        </li>
    </ul>
    <button class="btn btn-primary" name="tambah" type="submit">Submit</button>
    <button  class="btn btn-primary" name="kembali">
    <a href="admin.php">Kembali</a></button>
</form>

<?php
    require 'php/functions.php';
    if(isset($_POST['tambah'])){
        if(tambah($_POST)>0){
            echo "<script>
                alert('data berhasil ditambah!');
                document.location.href='admin.php'
            </script>";
        }else{
            echo "<script>
                alert('Gagal menambah data');
                document.location.href='admin.php'
            </script>";
        }
    }else{
        
    }
?>