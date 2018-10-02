<?php

include('konek.php');

$user = $_POST['user'];
$pswd = $_POST['pswd'];

if(!$user || !$pswd)
    echo 'User / Password Harus Diisi';
else{
    $search = mysqli_query($koneksi, 'Select * From user where user="'.$user.'" AND password="'.$pswd.'"');

    if(mysqli_num_rows($search) == 0)
        echo 'User / Password Salah';
    else
        header("Location: index.php?login=true&user=".$user);
}