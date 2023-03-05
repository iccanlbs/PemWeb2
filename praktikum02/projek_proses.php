<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "iccan" && $password == "123"){
    echo "Selamat, kamu berhasil login !";
} else {
    echo "Maaf, kamu gagal login, coba lagi !";
}