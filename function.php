<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php 
    //koneksi ke database
    $conn = mysqli_connect("localhost","root","","pegawai");
    function query($query){
	    global $conn;
	    $result = mysqli_query($conn, $query);
	    $rows = [];
	    while ( $row = mysqli_fetch_assoc($result)){
		    $rows[] = $row;
	    }
	return $row;
    }

    function tambah($data){
	    global $conn;
	    //ambil data dari peagawai
        $nama = $data["nama"];
        $bagian = $data["bagian"];
        $nohp = $data["nohp"];
        //menambah data yang diinputkan
        $query = "INSERT INTO pegawai values ('$id','$nama','$bagian','$nohp')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function hapus ($id){
	    global $conn;
	    mysqli_query($conn, "DELETE FROM pegawai where id = $id"); //menghapus data di tabel yang diingnkan
	    return mysqli_affected_rows($conn);
    }

    ?>
    </body>
</html>