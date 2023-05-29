<?php
// 資料庫主機設定
// 主機位置
$db_host='localhost' ;
// 管理者帳號
$db_username = 'root';
// 管理者密碼
$db_password = ' ' ;
//資料庫的名稱
$db_name = 'students'; 

// 連線到資料庫
$db_link = @new mysqli($db_host,$db_username,$db_password,$db_name);

// 檢測是否連上資料庫
if($db_link -> connect_error !=''){
    // 連線失敗
    echo'失敗';
}else{
    // 連線成功
    echo'成功';
    $db_link->query("SET NAMES'utf8'");
}


?>