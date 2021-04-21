<?php 
    require 'php/functions.php';
    $id = $_GET['id'];
    $data = query("SELECT * FROM items where id=$id")[0];
?>
<h3>Tambah Properti</h3>
<form action="" method="post">
    <ul>
        <li>
            <label>Gambar</label><br/>
            <input type="text" name="gambar" value="<?php echo $data['image']; ?>">
        </li>
        <li>
            <label>Tipe Properti</label><br/>
            <input type="text" name="tipe" value="<?php echo $data['type']; ?>">
        </li>
        <li>
            <label>Deskripsi</label><br/>
            <input type="text" name="deskripsi" value="<?php echo $data['description']; ?>">
        </li>
        <li>
            <label>Harga</label><br/>
            <input type="text" name="harga" value="<?php echo $data['price']; ?>">
        </li>
        <li>
            <label>Nama Pemilik</label><br/>
            <input type="text" name="nama" value="<?php echo $data['owner_name']; ?>">
        </li>
        <li>
            <label>Kontak Pemilik</label><br/>
            <input type="text" name="kontak" value="<?php echo $data['owner_contact']; ?>">
        </li>
    </ul>
    <button class="btn btn-primary" name="tambah" type="submit">Submit</button>
    <button  class="btn btn-primary" name="kembali">
    <a href="admin.php">Kembali</a></button>
</form>

<?php
    if(isset($_POST['tambah'])){
        if(tambah($_POST)>0){
            echo "<script>
                alert('data berhasil diubah!');
                document.location.href='admin.php'
            </script>";
        }else{
            echo "<script>
                alert('Gagal mengubah data');
                document.location.href='admin.php'
            </script>";
        }
    }else{
        
    }
?>