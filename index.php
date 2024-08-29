<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <!-- navbar -->
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary fixed-top">
                    <div class="container-fluid" style="margin-left: 50px;">
                        <a class="navbar-brand text-light" href="navbar">Warung RANDF</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active text-light" aria-current="page" href="navbar">Home</a>
                                <a class="nav-link text-light" href="home">Menu makanan</a>
                                <a class="nav-link text-light" href="footer">footer</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end navbar -->
        <!-- home -->
        <div class="row" style="margin-top: 70px;">
            <div class="col"></div>
            <div class="col">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="0.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="2.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <!-- end home -->
        <!-- isi -->
        <div class="row mt-5">
            <h3 class="d-flex justify-content-center mb-4">Menu Paket</h3>
            <?php
                $menu =
                [
                    [
                        'kode'          =>  'p1',
                        'nama_paket'    =>  'paket 1',
                        'isi paket'     =>  ' <br> 1.Nasi Biasa
                                            <br> 2.Ayam Serundeng
                                            <br> 3.Jeruk
                                            <br> 4.Sambal
                                            <br> 5.Krupuk
                                            <br> 6.Timun
                                            <br> 7.Seledri',
                        'harga'         =>  'Rp. ' . number_format(17000, 0, ',', '.'),
                        'gambar'        =>  'R5yqv6aCj9AsclaDDaaCpKUaF6NBg4D6zTw0t4NP.jpg',
                        'link'          =>  '1.php'
                    ],
                    [
                        'kode'          =>  'p2',
                        'nama_paket'    =>  'paket 2',
                        'isi paket'     =>  ' <br> 1.Nasi Biasa
                                            <br> 2.Sate Taichan, 
                                            <br> 3.Telur Sambel Goreng 
                                            <br> 4.Teri Sambel Goreng
                                            <br> 5.Sayuran',
                        'harga'         =>  'Rp. ' . number_format(25000, 0, ',', '.'),
                        'gambar'        =>  'paket2.jpg',
                        'link'          =>  '2.php'
                    ],
                    [
                        'kode'          =>  'p3',
                        'nama_paket'    =>  'paket 3',
                        'isi paket'     =>  ' <br> 1.Nasi Biasa
                                            <br> 2.Ayam Bakar 
                                            <br> 3.Tahu 
                                            <br> 4.Tempe 
                                            <br> 5.Sambal 
                                            <br> 6.Timun 
                                            <br> 7.Seledri',
                        'harga'         =>  'Rp. ' . number_format(23000, 0, ',', '.'),
                        'gambar'        =>  'paket3.jpg',
                        'link'          =>  '3.php'
                    ],
                    [
                        'kode'          =>  'p4',
                        'nama_paket'    =>  'paket 4',
                        'isi paket'     =>  ' <br> 1.Nasi Biasa
                                            <br> 2.Sate Bakar 
                                            <br> 3.Sayur Sop 
                                            <br> 4. Pisang 
                                            <br> 5.Sambal 
                                            <br> 6.Timun 
                                            <br> 7.Seledri
                                            <br> 8.Telur di Gulung',
                        'harga'         =>  'Rp. ' . number_format(25000, 0, ',', '.'),
                        'gambar'        =>  'paket4.jpg',
                        'link'          =>  '4.php'
                    ],
                    [
                        'kode'          =>  'p5',
                        'nama_paket'    =>  'paket 5',
                        'isi paket'     =>  ' <br> Soto Daging Madura',
                        'harga'         =>  'Rp. ' . number_format(20000, 0, ',', '.'),
                        'gambar'        =>  'paket9.webp',
                        'link'          =>  '5.php'
                    ],
                    [
                        'kode'          =>  'p6',
                        'nama_paket'    =>  'paket 6',
                        'isi paket'     =>  ' <br> Nasi Goreng Kampung',
                        'harga'         =>  'Rp. ' . number_format(15000, 0, ',', '.'),
                        'gambar'        =>  'paket6.jpg',
                        'link'          =>  '6.php'
                    ],
                    [
                        'kode'          =>  'p7',
                        'nama_paket'    =>  'paket 7',
                        'isi paket'     =>  ' <br> Chicken Teriyaki',
                        'harga'         =>  'Rp. ' . number_format(25000, 0, ',', '.'),
                        'gambar'        =>  'paket7.jfif',
                        'link'          =>  '7.php'
                    ],
                    [
                        'kode'          =>  'p8',
                        'nama_paket'    =>  'paket 8',
                        'isi paket'     =>  ' <br> Beef Yakiniku',
                        'harga'         =>  'Rp. ' . number_format(35000, 0, ',', '.'),
                        'gambar'        =>  'paket8.webp',
                        'link'          =>  '8.php'
                    ],
                ];
                foreach ($menu as $data){
            ?> 
            <div class="col-xl-3 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <img src="<?php echo $data['gambar']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['nama_paket']?></h5>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['kode']?>">
                            Detail Produk
                        </button>
                        <a href="<?php echo $data['link']?>" target="_blank"><button class="btn btn-primary">Cek Out</button></a>
                    </div>
                </div>
            </div>
                <!-- modal produk 1 -->
                <div class="modal fade" id="exampleModal<?php echo $data['kode']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail <?php echo $data['nama_paket']?></h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php
                                    echo "Isi paket : " . $data['isi paket'];
                                    echo "<br>";
                                    echo "harga : " . $data['harga'];
                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
                <?php } ?>
        </div>
        <!-- end isi -->
    </div>
    <!-- Footer -->
    <div class="row">
        <div class="col">
            <footer class="bg-primary text-center text-white" style="margin-left: -20px; margin-right: -20px; margin-top: 150px;">
                <div class="text-center p-3 text-light" style="background-color: rgba(0, 0, 0, 0.05);">
                    Created with by
                    <a class="text-light text-decoration-none fw-bold " href="https://www.instagram.com/cyber176e/" target="_blank">Fahry Alghazali</a>
                </div>
            </footer>
        </div>
    </div>
    <!-- end footer -->

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>