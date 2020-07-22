<html>
    <head>
        <title> Belajar Coding PHP Native </title>
    </head>
    <body>
    <center>
        <h1>Tabel Data </h1>
            <div>
                <form action = "" method = "POST">
                    <label> nama </label>
                    <input type = "text" name="nama">
                    <br>
                    <label> ttl </label>
                    <input type = "date" name="ttl">
                    <br>
                    <input type = "submit" name="submit">
                </form>

                <?php
                include("koneksi.php");
                //ini ketika mengklik tombol submit
                    if(isset($_POST['submit'])){
                        $nama = $_POST['nama'];
                        $ttl = $_POST['ttl'];
                        $query = "INSERT INTO user (nama,tanggal_lahir) VALUES ('$nama','$ttl')";
                        $jalankan = mysqli_query($koneksi,$query);
                        if($jalankan){
                            echo "berhasil memasukan data";
                        }else {
                            echo "gagal";
                        }
                    }

                ?>
            </div>
        </center>
    </body>
</html>