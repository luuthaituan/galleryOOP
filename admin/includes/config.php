<?php
//db connection constant

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = 'Tuan@8999';
const DB_NAME = 'gallery_db';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($connection){
    echo "yes";
}
?>