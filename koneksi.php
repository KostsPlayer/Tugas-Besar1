<?php

$conn = mysqli_connect("localhost", "root", "", "wallpaper");
if(mysqli_connect_errno())
{
    echo "Koneksi gagal" .mysqli_connect_error();
}
?>