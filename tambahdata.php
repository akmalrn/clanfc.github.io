<html>
    <head>
        <title>Tambahkan Data</title>
    </head>
<body>
        <h2>
            Tambah Data Klean Disini
        </h2>
        <form action="tambahdata.php" method="post" name="form1">
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Nama :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="nama">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        ID :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="id">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Nickname :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="nickname">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        TH :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="th">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
            </div>
            <div>
                <input type="submit" name="Submit" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Tambahkan">
                <a href='center.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
            </div>
        </form>
        <?php
        // Chek apalah form sudah tersubmit, insert data dari tabel mtor
        if(isset($_POST['Submit']))
        {
            $nama = $_POST['nama'];
            $merk = $_POST['id'];
            $plat = $_POST['nickname'];
            $telp = $_POST['th'];
// Masukan file koneksi database
            include("koneksi.php");
// insert motor data ke tabel
            $hasil = mysqli_query($connection, "INSERT INTO clanfc (nama,id,nickname,th) VALUES('$nama', '$merk', '$plat', '$telp') ");
// menampilkan pesan ketika berhasil di tambahkan
            echo "Data Motor Berhasil DiTambahkan. <a href='center.php'>Data Motor</a>";
        }
        ?>
    </body>
</html>