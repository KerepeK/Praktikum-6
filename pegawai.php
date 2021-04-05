<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pegawai";
    //membuat koneksi
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    //cek koneksi
    if (!$conn) {
	    die("Connection Failed: ".mysqli_connect_error());
    }
    //mengambil data dari tabel buku tamu
    $sql ="SELECT *FROM pegawai";
    $result = mysqli_query($conn, $sql);
    //cetak data dari kolom
    if (mysqli_num_rows($result) > 0){

    }
    else{
	echo "0 result";
    }
    mysqli_close($conn);
    ?>
<html>
<head>
	<title></title>
</head>
<body>
    
	<!-- Membuat Tabel -->
    <table border="1" cellpadding="10" cellspacing="1">
	    <tr>
		    <th>ID</th>
		    <th>Nama</th>
		    <th>Bagian</th>
		    <th>No HP</th>
	    </tr>
        <tr>
		    <?php
			while ($row = mysqli_fetch_assoc($result)) :
		    ?>
	    </tr>
	    <tr>
		    <td> <?= $row["id"] ; ?> </td>
		    
		    <!-- Mengisi tabel sesuai database-->
		    
		    <td> <?= $row["nama"] ; ?> </td>
		    <td> <?= $row["bagian"] ; ?> </td>
		    <td> <?= $row["nohp"] ; ?> </td>
            <td>
			    <a href="editpegawai.php?id=<?= $row["id"]; ?>">edit</a> |
			    <a href="hapuspegawai.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Pegawai Ini ?')">hapus</a>
		    </td>
	    </tr>
	<?php endwhile; ?>
</table>
<br>
<table cellspadding="10">
	<tr>
		<form action="tambahdata.php"> <!-- membuat buton tambah -->
			<button>tambah</button> 
		</form>
		</td>
</tr>
</table>
</body>
</html>