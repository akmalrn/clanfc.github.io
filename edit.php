<?php
include("koneksi.php");
if(isset($_POST['update']))
{
    $id = $_POST['nomor'];
$nama = $_POST['nama'];
    $merk = $_POST['id'];
    $plat = $_POST['nickname'];
    $telp = $_POST['th'];
    $hasil = mysqli_query($connection, "UPDATE clanfc SET nama='$nama', id='$merk', nickname='$plat', th='$telp' WHERE nomor=$id");
       header("Location: center.php");
}
?>
<?php
$id = $_GET['nomor'];
$hasil = mysqli_query($connection, "SELECT * FROM
 clanfc WHERE nomor=$id");
while($data = mysqli_fetch_array($hasil))
 {
     $nama = $data['nama'];
     $merk = $data['id'];
     $plat = $data['nickname'];
     $telp = $data['th'];
 }
?>
<html>
    <head>  
        <title>Edit</title>
    </head>
    <body>
        <h2>
            Edit Disini GUYsssss
        </h2>
        <form method="post" action="edit.php" name="formupload">
            <input type="hidden" name="nomor" value="<?php echo $_GET['nomor']; ?>">
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Nama :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="nama" value="<?php echo $nama; ?>">
            </div>  
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5    px;">
                    <label>
                        ID :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="id" value="<?php echo $merk; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Nickname :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="nickname" value="<?php echo $plat; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        TH :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="th" value="<?php echo $telp; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
            </div>
            <div>
                <input type="submit" name="update" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Edit">
                <a href='center.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </body>
</html>