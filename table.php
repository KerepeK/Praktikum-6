<html>
    <head>
        <title></title>
    </head>
    <body>
    <!-- perintah php -->
    <?php
        $servername="localhost"; // namaserver
        $username="root"; // nama user
        $password="";
        $dbname="wumbo";
        // koneksi ke db
        $conn=mysqli_connect($servername,$username,"",$dbname);
        // creat table
        $sql= "CREATE TABLE liga (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            kode VARCHAR(3) NOT NULL,
            negara VARCHAR(30) NOT NULL,
            champion int(3)
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