<?php

$conn = mysqli_connect("localhost", "root", "", "wallpaper");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result))
    {
        $rows[] = $row;
    }
    return $rows;
}

// Upload Gambar

function tambah($data)
{
    global $conn;

    $gambar = $data["gambar"];
}

$gambar = upload();
if(!$gambar)
{
    return false;
}

function upload()
{
    return false;`
}

?>