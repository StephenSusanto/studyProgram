<html>
<?php
    include("koneksi.php");
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = '$id'";
    $jalan = mysqli_query($koneksi,$query);
    $ambilData = mysqli_fetch_assoc($jalan);
    $nama =$ambilData['nama'];
    $ttl = $ambilData['tanggal_lahir'];
?>
    <head>
        <title> Belajar Coding PHP Native </title>
    </head>
    <body>
    <center>
        <h1>Tabel Data </h1>
            <div>
                <form action = "" method = "POST">
                    <label> nama </label>
                    <input type = "text" name="nama" value="<?php echo $nama; ?>">
                    <br>
                    <label> ttl </label>
                    <input type = "date" name="ttl" value="<?php echo $ttl; ?>">
                    <br>
                    <input type = "submit" name="submit">
                </form>

                <?php
                
                //ini ketika mengklik tombol submit
                    if(isset($_POST['submit'])){
                        $nama2 = $_POST['nama'];
                        $ttl2 = $_POST['ttl'];
                        $query2 = "UPDATE user SET nama = '$nama2', tanggal_lahir = '$ttl2' WHERE id = '$id'";
                        $jalankan = mysqli_query($koneksi,$query2);
                        if($jalankan){
                            header("location:index.php");
                        }else {
                            echo "gagal";
                        }
                    }

                ?>
            </div>
        </center>
    </body>
</html>