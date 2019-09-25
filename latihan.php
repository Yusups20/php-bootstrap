<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan Bootstrap</title>
    <!-- Pemanggilan css -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- Akhir Pemanggilan css -->
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="padding:20px;">
                <div class="card">
                    <div class="card-header">Latihan</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px;">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                        </tr>
                        <!-- PHP -->
                        <?php
                            if (isset($_POST['simpan'])) {
                                $a = $_POST['nama'];
                                $b = $_POST['kelas'];
                            ?>
                            <!-- END PHP -->
                            <tr>
                                <td><?php echo $a; ?></td>
                                <td><?php echo $b; ?></td>
                            </tr>
                            <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->  
    <footer>
      <center>&copy; 2019 SMK Assalaam Bandung</center>
    </footer>  
    <!-- End Footer -->

    <!-- Pemanggilan JS -->
    <script src="/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <!-- Akhir PEmangiilan JS -->
</body>
</html>