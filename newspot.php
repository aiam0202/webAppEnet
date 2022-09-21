<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakson webboard</title>
</head>
<body>
<h1 style="text-align:center">Sakson Webboard</h1><hr>
<?php
        echo "ผู้ใช้งานระบบ : $_SESSION[username]";
?>
<table>
<tr><td>หมวดหมู่ :</td><td><select name="หมวดหมู่">
        <option value="--ทั้งหมด--">--ทั้งหมด--</option>
        <option value="เรื่องทั่วไป">เรื่องทั่วไป-</option>
        <option value="เรื่องเรียน">เรื่องเรียน</option>
    </select></td></tr>
    <tr><td>หัวข้อ : </td><td><input type="text" name="หัวข้อ" size="50"></td></tr>
    <tr><td>เนื้อหา : </td><td><textarea name = "infor" rows="2" cols="30" ></textarea></td></tr>
    <tr><td colspan="2"  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="บันทึกข้อความ"></td></tr>
</table>
    
</body>
</html>