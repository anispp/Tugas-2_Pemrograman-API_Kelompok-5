<?php

$koneksi = mysqli_connect("localhost", "root", "", "apicrud");

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $sql = "SELECT * FROM barang";
    $query = mysqli_query($koneksi, $sql);
    $array_data = array();
    while($data = mysqli_fetch_assoc($query)){
        $array_data[] = $data;
    }
    echo json_encode($array_data);
}