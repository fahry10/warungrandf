<?php
$nama = $no = $total = $hp = $jp = $sb = $pajak = $tp = $tunai = $uang_kembali = "";
$showModal = false;

if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $no = $_POST['no'];
    $tunai = $_POST['tunai'] ?? 0;

    $hp = 17000;
    $jp = $no;
    $sb = $hp * $jp;
    $pajak = 10 / 100 * $sb;
    $tp = $sb + $pajak;

    $uang_kembali = $tunai - $tp;
    $showModal = true;
    $kode_invoice = 'INV-' . date('YmdHis') . '-' . rand(1000, 9999);
}
date_default_timezone_set('Asia/Jakarta');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid">
        <!-- navbar -->
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg bg-primary fixed-top">
                    <div class="container-fluid" style="margin-left: 50px;">
                        <a class="navbar-brand text-white" href="#">Warung RANDF</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Isi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#">Footer</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end navbar -->

        <!-- isi -->
        <div class="row" style="margin-top: 150px;">
            <div class="col">
                <img src="paket7.jfif" class="img-fluid" alt="">
            </div>
            <div class="col">
                <form method="post" onsubmit="return validateForm()">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo htmlspecialchars($nama); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Masukan jumlah pesanan</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="no" value="<?php echo htmlspecialchars($no); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputTunai" class="form-label">Jumlah Tunai</label>
                        <input type="number" class="form-control" id="inputTunai" name="tunai" oninput="hitungKembalian()" value="<?php echo htmlspecialchars($tunai); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="kirim">Beli Sekarang</button>
                </form>
            </div>
        </div>
        <!-- end isi -->

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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">INVOICE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body mx-4">
                            <div class="container">
                                <p class="my-5 mx-5 text-center" style="font-size: 25px;">Warung RANDF</p>
                                <div class="row">
                                    <ul class="list-unstyled">
                                        <li class="text-black"><?= $nama ?></li>
                                        <li class="text-muted mt-1"><?= $kode_invoice?></li>
                                        <li class="text-black mt-1"><?= date('d M Y') ?></li>
                                    </ul>
                                    <hr>
                                    <div class="col-xl-10">
                                        <p>Harga Paket</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end"><?= 'Rp.' . number_format($hp, 0, ',', '.') ?></p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-xl-10">
                                        <p>Jumlah Pesanan</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end"><?= $jp ?></p>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                </div>
                                <div class="row">
                                    <div class="col-xl-10">
                                        <p>Sub Total</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end"><?= 'Rp.' . number_format($sb, 0, ',', '.') ?></p>
                                    </div>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col-xl-10">
                                        <p>Pajak</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end"><?= 'Rp.' . number_format($pajak, 0, ',', '.') ?></p>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                </div>
                                <div class="row">
                                    <div class="col-xl-10">
                                        <p>Total Pajak</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end"><?= 'Rp.' . number_format($tp, 0, ',', '.') ?></p>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                </div>
                                <div class="row">
                                    <div class="col-xl-10">
                                        <p>Tunai</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end" id="modalTunai"><?= 'Rp.' . number_format($tunai, 0, ',', '.') ?></p>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                </div>
                                <div class="row">
                                    <div class="col-xl-10">
                                        <p>Uang Kembali</p>
                                    </div>
                                    <div class="col-xl-2">
                                        <p class="float-end" id="modalUangKembali"><?= 'Rp.' . number_format($uang_kembali, 0, ',', '.') ?></p>
                                    </div>
                                    <hr style="border: 2px solid black;">
                                </div>
                                <div class="text-center" style="margin-top: 90px;">
                                    <p>TERIMA KASIH SUDAH MEMESAN DI WARUNG KAMI </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function hitungKembalian() {
            const hp = 17000;
            const jp = parseFloat(document.querySelector('[name="no"]').value) || 0;
            const sb = hp * jp;
            const pajak = 0.10 * sb;
            const tp = sb + pajak;
            
            const tunai = parseFloat(document.getElementById('inputTunai').value) || 0;
            const uangKembali = tunai - tp;

            document.getElementById('modalTunai').textContent = tunai.toFixed(2);
            document.getElementById('modalUangKembali').textContent = uangKembali.toFixed(2);
        }

        <?php if ($showModal): ?>
            document.addEventListener('DOMContentLoaded', function () {
                var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
                myModal.show();
            });
        <?php endif; ?>
    </script>

</body>
</html>
