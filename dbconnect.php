<?php
try{
    $db = new PDO('mysql:dbname=mini_bbs;host=127.0.0.1;
    charaset=utf8','root','');
}catch(PDOException $e){
    print('DB接続エラー：'.$e->getMessage());
}