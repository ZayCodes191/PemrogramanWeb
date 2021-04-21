<?php 
    require 'functions.php';

    if(!isset($_GET['id'])){
        header('location: ../index.php');
        exit;
    }

    $id = $_GET['id'];

    $data = query("SELECT * FROM items where id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="gambar">
        <img src="../assets/<?php echo $data['image'];?>">
    </div>
    <div class="keterangan">
        <p><?php echo $data['type'];?></p>
        <p><?php echo $data['description'];?></p>
        <p>Rp. <?php echo $data['price'];?></p>
        <p><?php echo $data['owner_name'];?></p>
        <p><?php echo $data['owner_contact']?></p>
    </div>

    <a href="../index.php"><button>Kembali</button></a>
</body>
</html>