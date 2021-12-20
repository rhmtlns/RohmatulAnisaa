<?php
    $conn = mysqli_connect('localhost', 'root', '', 'tugass');
    if(!$conn){
        echo 'Koneksi database gagal';
    }
?>