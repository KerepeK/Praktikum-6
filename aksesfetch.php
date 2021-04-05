<html>
<!-- kepala dan judul -->
    <head>
        <title></title>
    </head>
    <body>
        <!-- perintah php -->
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="wumbo";
        // buat koneksi
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        // cek koneksi
        if (!$conn) {
            die("connection failed: ".mysqli_connect_error());
        }
        // bahasa sql, mengambil tabel
        $sql="SELECT kode, negara, champion FROM liga";
        $result = mysqli_query($conn,$sql);
        // cek sekaligus pengambilan isi kolom
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo"kode: ".$row["kode"]."- negara: ".$row["negara"]
                ." ".$row["champion"]."<br>";
            }
        }
        else{
            echo"0 result";
        }
        mysqli_close($conn);
        ?>
    </body>
</html>