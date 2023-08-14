<?php
    $hostname="localhost";
    $username="root";
    $password= "";
    $database= "oop";

    $koneksi= mysqli_connect($hostname, $username, $password, $database);

    if($koneksi->connect_error){
        var_dump($koneksi->connect_error);
        die('Koneksi bermasalah');
    }
    // echo "Koneksi Bermasalah";

    // die(var_dump($koneksi));

    $sql = "SELECT * FROM users";
    $result = $koneksi->query($sql);
    $data = $result->fetch_all(MYSQLI_ASSOC);
    // $data_satuan= $result->fetch_assoc();

    // die(var_dump($data [1] ['name']));

    var_dump($data);
    // var_dump($data_satuan);

?>