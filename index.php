<html>
    <head>
        <title> Belajar Coding PHP Native </title>
    </head>
    <body>
    <center>
        <h1>Tabel Data </h1>
            <div>
                <table border ="1">
                    <tr>
                        <th>Nomor </th>
                        <th>Nama </th>
                        <th>Tanggal Lahir</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    //mengambil file koneksi.php
                        include("koneksi.php");
                        //ini merupakan query untuk mengambil data user
                        $query = "SELECT * FROM user";
                        //ini untuk menjalankan dengan mengambil variabel koneksi di file koneksi.php dan query
                        $jalankan = mysqli_query($koneksi, $query);
                        $nomor = 1;
                        //ini merupakan script untuk mengeluarkan data 
                        while($output = mysqli_fetch_assoc($jalankan)){
                            echo "<tr>
                                    <td>".$nomor."</td>
                                    <td>".$output['nama']."</td>
                                    <td>".date("d-m-Y", strtotime($output['tanggal_lahir']))."</td>
                                    <td><a href='edit.php?id=".$output['id']."'>Edit</a></td>
                                  </tr>";
                            $nomor +=1;
                        }
                    ?>
                </table>
            </div>
        </center>
    </body>
</html>