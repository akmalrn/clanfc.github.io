<?php
include("koneksi.php");
$hasil = mysqli_query($connection, "SELECT * FROM clanfc ORDER by nomor DESC");
?>
<html>
    <head>
        <title>Member FC</title>
        <style>
            .clan{font-size:50;
            }
            img {margin:-50px}
            p {font-size:20px;}
        </style>
    </head>
    <body>
        <center>
    <p class="clan"> free clan</p>
        <img src="Logo clan 1.png">
        <p>7</p>
        </center>
        <div style="
        margin-top: 10px;
        margin-bottom: 10px;
        border: 2px solid black;
        width: 30%;
        text-align: center;
        color: black;
        padding: 5px;
        float: right;">
            <a href="tambahdata.php" style="text-decoration: none; color: black;">
                Klik Disini Gesss Untuk Menambahkan Data
            </a>
        </div>
        <table style="width: 100%;" border="1">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Id</th>
                    <th>Nickname</th>
                    <th>TH</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($motor = mysqli_fetch_array($hasil))
                {
                    echo "<tr>";
                    echo "<td>".$motor['nama']."</td>";
                    echo "<td>".$motor['id']."</td>";
                    echo "<td>".$motor['nickname']."</td>";
                    echo "<td>".$motor['th']."</td>";
                    echo "<td>
                    <a href='edit.php?nomor=$motor[nomor]'>Edit</a> | <a href='delete.php?nomor=$motor[nomor]'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>