<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="wumbo";

        $conn=mysqli_connect($servername,$username,"",$dbname);
        if (!$conn) {
            die("connection failed: ".mysqli_connect_error());
        }
    
        $sql="INSERT INTO liga (kode,negara,champion)
        VALUE('jer','jerman','4')";
        
        $sql="INSERT INTO liga (kode,negara,champion)
        VALUE('spa','spanyol','3')";
        
        $sql="INSERT INTO liga (kode,negara,champion)
        VALUE('eng','english','3')";
        
        if (mysqli_query($conn,$sql)){
            echo "new record created successfully";
        }
        else {
            echo "error: ".$sql."<br>".mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
    </body>
</html>