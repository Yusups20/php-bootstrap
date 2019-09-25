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
    <title>Raport Siswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Assalaam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    <center>
        <h2>Raport Siswa</h2>
    </center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Detail Raport</div>
                    <div class="card-body">
                    <?php 
                    if (isset($_POST['simpan'])) {
                        $a = $_POST['nama'];
                        $b = $_POST['kelas'];
                        $nilai1 = $_POST['nh'];
                        $uts = $_POST['uts'];
                        $uas = $_POST['uas'];
                    }
                ?>
                <div class="table">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nilai Harian</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Nilai Akhir</th>
                            <th>Status</th>
                        </tr>
                        <?php 
                            foreach ($a as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $a[$key]; ?></td>
                            <td><?php echo $b[$key]; ?></td>
                            <td><?php echo $nilai1[$key]; $nilai = $nilai1[$key]*(60/100); ?></td>
                            <td><?php echo $uts[$key]; $uts1 = $uts[$key]*(20/100); ?></td>
                            <td><?php echo $uas[$key]; $uas1 = $uas[$key]*(20/100); ?></td>
                            <?php echo $na = $nilai+$uts1+$uas1;?>
                            <td><?php echo $na;?></td>
                            <td><?php 
                                if($na > 75) {
                                    echo "<strong>LULUS</strong>";
                                }else{
                                    echo "<strong>TIDAK LULUS</strong>";
                                }
                            ?></td>
                        </tr>
                        <?php
                            }
                            ?>
                    
                
            </div>
        </div>
    </div>
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