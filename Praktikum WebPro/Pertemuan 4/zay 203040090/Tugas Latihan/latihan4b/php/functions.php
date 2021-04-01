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
?>