<?php 
session_start();
$arr=($_SESSION['login']);
echo 'Xin chào '.$arr[0].'. Bạn đã đăng nhập thành công!'.'</br>';
echo $arr[1].'</br>';

?>