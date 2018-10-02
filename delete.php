<?php

include('konek.php');

$id = $_GET['id'];

$query = mysqli_query($koneksi, 'Delete from user where id="'.$id.'"');

if(mysqli_num_rows($query) == 1)
    echo 'Gagal Menghapus data';
else
    header('location:index.php');
