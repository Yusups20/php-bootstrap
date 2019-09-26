<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        font-family: 'Chilanka',
        cursive;
    </style>
    <title>Assalaam SHOPPING</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Assalaam Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Detail Pembelian Barang</div>
                    <div class="card-body">
                        <form action="utspro3.php" method="post">
                            <?php
                            if (isset($_POST['simpan'])) {
                            /* Data 1 */
                            $jml = $_POST['jumlah_buku'];
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $jk = $_POST['jk'];
                            $tanggal_beli = $_POST['tanggal_beli'];
                            /* Data 2 */
                            $judul = $_POST['nama'];
                            $kode = $_POST['kode'];
                            $pengarang = $_POST['jenis'];
                            $jenis = $_POST['harga'];
                            $harga = $_POST['JumlahBarang'];

                                for ($a = 0; $a < $jml; $a++) { ?>
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input type="text" class="form-control" name="nama1[]" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kode Barang</label>
                                        <input type="text" class="form-control" name="kode[]" required></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="" name="jenis">Jenis Barang</label>
                                        <br>
                                        <input type="checkbox" name="j1" value="electronic">Elektronic<br>
                                        <input type="checkbox" name="j2" value="makanan">Makanan<br>
                                        <input type="checkbox" name="j3" value="minuman">Minuman<br>
                                        <input type="checkbox" name="j4" value="baju">Baju<br>
                                        <input type="checkbox" name="j5" value="celana">Celana<br>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah Barang</label>
                                        <input type="number" class="form-control" name="JumlahBarang[]" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" class="form-control" name="harga[]" required>
                                    </div>
                                    <hr style="color: #f00;background-color: #f00;height: 5px;">
                                <?php } ?>
                                <input type="hidden" name="jumlah_buku" value="<?php echo $jml ?>">
                                <input type="hidden" name="nama" value="<?php echo $nama ?>">
                                <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
                                <input type="hidden" name="jk" value="<?php echo $jk ?>">
                                <input type="hidden" name="tanggal_beli" value="<?php echo $tanggal_beli ?>">
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary">Proses</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                        </form>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>