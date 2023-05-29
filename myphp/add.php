<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>新增學生資料</h1>
    <form action="newDate.php" method="post">
        <table>
            <tr>
                <td>姓名</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" name="sex" id="">男生
                    <input type="radio" name="sex" id="">女生
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td><input type="date" name="" id=""></td>
            </tr>
            <tr>
                <td>信箱</td>
                <td><input type="email" name="" id=""></td>
            </tr>
            <tr>
                <td>電話</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>地址</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td><input type="submit" value="確認送出"></td>
                <td><input type="submit" value="重新填寫"></td>
            </tr>
        </table>
    </form>
</body>
</html>