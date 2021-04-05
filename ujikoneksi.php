<html>
<!-- kepala dan judul -->
    <head>
        <title>Koneksi Database MySQL</title>
    </head>
    <body>
        <!-- kata-kata -->
        <h1>Demo Koneksi database MySQL</h1> 
        <!-- perintah php -->
        <?php
        // menyambungkan ke db yang ditentukan
        $conn=mysqli_connect("localhost","root","","coba2");
        // cek koneksi
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: ".mysqli_connect_error();
            exit();
        }
        ?>
    </body>
</html>
