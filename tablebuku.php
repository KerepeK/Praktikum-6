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
        $password="";
        $dbname="buku_tamu";
        // koneksi ke db
        $conn=mysqli_connect($servername,$username,"",$dbname);
        // creat table
        $sql= "CREATE TABLE buku_tamu (
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nama VARCHAR(200) NOT NULL,
            email VARCHAR(50) NOT NULL,
            isi TEXT
        )";
        if(mysqli_query($conn,$sql)){
            echo "table created succesfully";
        }
        else{
            echo "error creating table: ".mysqli_error($conn);
        }
    ?>    
    </body>
</html>