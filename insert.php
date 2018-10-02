<?php

include('konek.php');

$user = $_POST['user'];
$pswd = $_POST['pswd'];

if(strlen($user) < 5 || strlen($pswd) < 5)
    echo 'User / Password Harus lebih dari 5 Karakter';
else{
    $search = mysqli_query($koneksi, 'Select * From user where user="'.$user.'"');

    if(mysqli_num_rows($search) > 0)
        echo 'Nama User Sudah Ada';
    else{
        $insert = mysqli_query($koneksi, 'Insert Into user (user, password) values ("'.$user.'", "'.$pswd.'")');

        if(mysqli_num_rows($insert) == 0)
            echo 'Gagal Menambah Data';

        header('location:index.php');
    }
}