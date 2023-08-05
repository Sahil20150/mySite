<?php
    
    $servername = "localhost";
    $username="root";
    $password="";
    $database="crud";

    $conn =  new mysqli($servername,$username,$password,$database);

    if ($conn->connect_error){
        die("connection failed :" . $conn->connect_error );

    }

    function encrypteddata($data) {
        $key="1234";
        $cipher="AES-256-CBC";
    
          $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
          $encrypted = openssl_encrypt($data,$cipher,$key,OPENSSL_RAW_DATA,$iv);
          $encrypted = base64_encode($encrypted);
    
          return $encrypted;
    
         }    
?>