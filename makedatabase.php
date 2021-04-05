<html>
    <!-- kepala dan judul -->
    <head>
        <title></title>
    </head>
    <body>
        <!-- perintah php -->
        <?php
        $servername="localhost"; // namaserver
        $username="root"; // nama user
        // koneksi ke db
        $conn=mysqli_connect($servername,$username);
        // cek koneksi
        if (!$conn){
            die("Connection failed: ".mysqli_connect_error());
        }
        // cek apa berhasil dibuat atau tidak
        // tabel yang dibuat bernama wumbo
        $sql="CREATE DATABASE wumbo";
        if (mysqli_query($conn,$sql)) {
            echo"Database created successfully";
        }
        else{
            echo"Error creating database successfully: ".mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>