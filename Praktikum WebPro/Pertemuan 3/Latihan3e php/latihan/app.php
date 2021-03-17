<?php
    $datas = [
        [
            'image' => 'images/property-1.jpg',
            'type' => 'Rumah',
            'price' => 1000000,
            'description' => "Rumah bagus",
            'owner'=> [
                        'name' => "Bagas",
                        'contact' => "+6212372522"
                    ]
        ],
        [
            'image' => 'images/property-2.jpg',
            'type' => 'Kostan',
            'price' => 500000,
            'description' => "Kostan campur strategis",
            'owner'=> [
                        'name' => "Pakde Mantap",
                        'contact' => "+62121234666"
                    ]
        ],
        [
            'image' => 'images/property-3.jpg',
            'type' => 'Villa',
            'price' => 500000000,
            'description' => "Villa mewah daerah pusat kota",
            'owner'=> [
                        'name' => "Bibah",
                        'contact' => "+62123271523"
                    ]
        ],
        [
            'image' => 'images/property-4.jpg',
            'type' => 'Apartemen',
            'price' => 30000000,
            'description' => "Apartemen keren",
            'owner'=> [
                        'name' => "Andi",
                        'contact' => "+621244231213"
                    ]
        ],
        [
            'image' => 'images/property-5.jpg',
            'type' => 'Rumah',
            'price' => 2000000,
            'description' => "Rumah yang dikontrakan perbulan",
            'owner'=> [
                        'name' => "Miky",
                        'contact' => "+621323213421"
                    ]
        ],
        [
            'image' => 'images/property-6.jpg',
            'type' => 'Rumah',
            'price' => 10000000,
            'description' => "Rumah 2 lantai, 1 garasi, 2 kamar tidur, 1 kamar mandi",
            'owner'=> [
                        'name' => "Mira",
                        'contact' => "+62111331111"
                    ]
        ],
        [
            'image' => 'images/property-7.jpg',
            'type' => 'Villa',
            'price' => 7000000,
            'description' => "Villa pinggir pantai, cocok untuk liburan keluarga",
            'owner'=> [
                        'name' => "Marni",
                        'contact' => "+6211121213131"
                    ]
        ],
        [
            'image' => 'images/property-8.png',
            'type' => 'Coworking',
            'price' => 150000,
            'description' => "Coworking space kerja sambil santai",
            'owner'=> [
                        'name' => "Pras",
                        'contact' => "+6221123454"
                    ]
        ],
        [
            'image' => 'images/property-9.jpg',
            'type' => 'Kost',
            'price' => 900000,
            'description' => "Kost khusus wanita daerah kampus",
            'owner'=> [
                        'name' => "Ningsih",
                        'contact' => "+621231232144"
                    ]
        ],
        [
            'image' => 'images/property-10.jpg',
            'type' => 'Rumah',
            'price' => 300000,
            'description' => "Kost khusus laki-laki dan murah!",
            'owner'=> [
                        'name' => "Budi",
                        'contact' => "+62121324242"
                    ]
        ],
    ];

?>
<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    </head>
    <body>
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
                <td><img src="<?php echo $data['image'];?>"></td>
                <td><?php echo $data['type'];?></td>
                <td><?php echo $data['description'];?></td>
                <td>Rp. <?php echo $data['price'];?></td>
                <td><?php echo $data['owner']['name'];?></td>
                <td><?php echo $data['owner']['contact'];?></td>
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