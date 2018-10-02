<?php

session_start();

if(isset($_SESSION['pengunjung']))
    $_SESSION['pengunjung']++;
else
    $_SESSION['pengunjung'] = 1;

echo "Banyak Pengunjung pada page ini = ".$_SESSION['pengunjung'];