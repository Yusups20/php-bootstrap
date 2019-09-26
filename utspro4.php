<?php 
                    if (isset($_POST['bayar'])) {
                        $uang = $_POST['uang'];
                    
                    }
                    if ($uang == $total) {
                        echo "terimakasih";
                    }
    echo "<pre>";
    echo "Data Berhasil Di input<br>";
    echo "Kembalian Uang :<br>";
    ?>
    <html>
    Apakah Anda Ingin Memasukan Data Lagi<br>
    <a class="navbar-brand" href="utspro2.php">IYA</a>
        <a class="navbar-brand" href="utspro5.php" >TIDAK</a>
        
    </html>