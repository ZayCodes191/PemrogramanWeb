<?php
    function koneksi()
    {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "properti");

        return $conn;
    }
    
    function query($sql)
    {
        $conn = koneksi();
        $res = mysqli_query($conn, "$sql");
        $rows = [];
        while($row = mysqli_fetch_assoc($res))
        {
            $rows[] = $row;
        }
        return $rows;
        
    }

    function tambah($data)
    {
        $conn = koneksi();
        $gambar = htmlspecialchars($data['gambar']);
        $tipe = htmlspecialchars($data['tipe']);
        $deskripsi = htmlspecialchars($data['deskripsi']);
        $harga = htmlspecialchars($data['harga']);
        $nama = htmlspecialchars($data['nama']);
        $kontak = htmlspecialchars($data['kontak']);

        $query = "INSERT INTO `items`(`image`, `type`, `price`, `description`, `owner_name`, `owner_contact`) VALUES ('$gambar','$tipe',$harga,'$deskripsi','$nama','$kontak')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>