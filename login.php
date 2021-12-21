<html>
    <head>
        <title>Halaman Beranda</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <div class='box-login'>
            <h1 style='font-size:26px'; color:#fff;>Login dulu yaa</h1>
            <form action='' method='post'>
                <input type='text' name='email' placeholder='Masukkan Email'/><br>
                <input type='password' name='pass' placeholder='Masukkan Password'/><br>
                <input type='submit' name='login' value='Login'/><br>
            </form>
            <?php 
                include 'koneksi.php';
                if(isset($_POST['Login'])){
                    $cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."'AND password = '". $_POST['pass']."'");
                    $hasil = mysqli_fetch_array($cek);
                    $count = mysqli_num_rows($hasil);
                    $nama_user = $hasil['nama'];
                    if($count > 0){
                        $_SESSION['nama'] = $nama_user;
                        header("location:beli.php");
                    }else{
                        echo "Gagal Login";
                    }
                }
            ?>
        </div>
    </body>
</html>
