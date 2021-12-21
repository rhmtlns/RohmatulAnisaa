<?php
    session_start();
    if(!isset($_SESSION['nama'])){
        echo "Anda Belum Login! Silahkan <a href='login.php'>login dulu yaaa</a>";
    }else{
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charsheet="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rohmatul Anisa</title>
        <link rel="stylesheet" href="BELI.css">
    </head>

    <body>
        <h1>Hai <?php echo $_SESSION['nama'] ?>, Tuliskan pesananmu disini yaa !</h1>
        <img src="penutups.png">
        <table>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" id="Nama"><br></td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><textarea id="Email"></textarea><br></td>
            </tr>
            <tr>
                <td><label>Alamat</label></td>
                <td><textarea id="Alamat"></textarea><br></td>
            </tr>
            <tr>
                <td><label>Nama Pesanan</label></td>
                <td><input type="text" id="Nama Pesanan"><br></td>
            </tr>
            <tr>
                <td><label>Jumlah</label></td>
                <td><input type="text" id="Jumlah"><br></td>
            </tr>
            <tr>
                <td><label>Harga</label></td>
                <td><input type="text" id="Harga"><br></td>
            </tr>
            <tr>
                <td><label>Total</label></td>
                <td><textarea id="Total"></textarea><br></td>
            </tr>
            <tr>
                <td><label>Diskon</label></td>
                <td><textarea id="dis"></textarea><br></td>
            </tr>
            <tr>
                <td><label>Pembayaran</label></td>
                <td><textarea id="Pembayaran"></textarea><br></td>
            </tr>
        </table>
        <button onclick="hasil()">Hitung</button>
        <button>Delete</button>
        <script type="text/javascript" src="tugas3.js"></script>
    </body>
</html>

<?php } ?>
