<?php
    require 'php/functions.php';
    $datas = query("SELECT * FROM items");
?>
<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    </head>
    <body>
        <a href="php/login.php">
            <button type="">Masuk ke halaman admin</button>
        </a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Tipe Properti</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Nama Pemilik</th>
                <th>Kontak Pemilik</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($datas as $key => $data){ ?>
            <tr>
                <td><?php echo $key+1;?></td>
                <td><a href="php/detail.php?id=<?php echo $data['id']; ?>"><img src="assets/<?php echo $data['image'];?>"></a></td>
                <td><?php echo $data['type'];?></td>
                <td><?php echo $data['description'];?></td>
                <td>Rp. <?php echo $data['price'];?></td>
                <td><?php echo $data['owner_name'];?></td>
                <td><?php echo $data['owner_contact']?></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
    </body>
</html>