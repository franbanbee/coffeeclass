<?php
// 載入外部的連線檔案
include('conn.php');
$sql_query = 'select * from students';
$result = $db_link->query($sql_query);
// 取得總筆數
$tot_records = $result ->nums_rows;
?>


<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="container">
         <!-- echo 顯示資料 -->
        <!-- <h1>總比數：  <?php echo $tot_records ?> </h1> -->
        <h1>學生資料管理系統</h1>
        <p>
            目前資料總筆數: <?php echo $tot_records ?>
             <a href="#">新增學生資料</a>
        </p>
        <table border='1' align="center">
        <!-- 欄位 -->
        <tr>
            <th>座號</th>
            <th>姓名</th>
            <th>性別</th>
            <th>生日</th>
            <th>信箱</th>
            <th>電話</th>
            <th>地址</th>
            <th>功能</th>
        </tr>
        <!-- 資料 -->
        <?php
        // 第一筆資料
        // $row_rec= $result->fetch_assoc();

        // 多筆資料
        while($row_rec= $result->fetch_assoc()){
            // 逐筆資料
            echo '<tr>';
            echo '<td>'.$row_rec["cID"].'</td>';
            echo '<td>'.$row_rec["cName"].'</td>';
            echo '<td>'.$row_rec["cSex"].'</td>';
            echo '<td>'.$row_rec["cBirthday"].'</td>';
            echo '<td>'.$row_rec["cEmail"].'</td>';
            echo '<td>'.$row_rec["cPhone"].'</td>';
            echo '<td>'.$row_rec["cAddr"].'</td>';
            echo '<td><a href="#">修改</a><a href="#">刪除</a></td>';
            echo '</tr>';
        }
            
        ?>
        </table>
      
    </div>
   
</body>
</html>