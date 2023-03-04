<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "aldi" && $password == "1234"){
    echo " selamat, kamu berhasil login !";
} else{
    echo "maaf, kamu gagal login, coba lagi";
}