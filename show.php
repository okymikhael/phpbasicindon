<?php
include('konek.php');

$query = mysqli_query($koneksi, 'Select * From user');

if(mysqli_num_rows($query) == 0)
    return 'Kosong';