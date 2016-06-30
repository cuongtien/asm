<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'connect.php';
        if(isset($_POST['submit'])){
            
        $id_kh = $_POST['id_kh'];
        $ten_kh = $_POST['ten_kh'];
        $dia_chi = $_POST['dia_chi'];
        $mail = $_POST['mail'];
        $sdt = $_POST['sdt'];
        
        $insert = mysql_query("UPDATE khach_hang SET ten_kh='$ten_kh', dia_chi='$dia_chi',mail='$mail',sdt='$sdt' WHERE id_kh='$id_kh'");
        }
        if(isset($insert)){
            echo"Success";
        }else{
            echo"Error";
        }
        ?>
        <h1 align="center">Sửa khách hàng</h1>
        <form name="addkh" action="" method="post" align="center">
            Mã khách hàng:<br> <input name="id_kh" type ="text" size="20"  placeholder="chi duoc nhap so va duoi 20"><br><br>
            Tên khách hàng:<br> <input name="ten_kh" type ="text" size="20" placeholder="max 20"><br><br>
            Địa chỉ: <br><input name="dia_chi" type ="text" size="20" placeholder="max 20"><br><br>
            Email:<br> <input name="mail" type ="text" size="20" placeholder="max 20"><br><br>
            Số điện thoại:<br> <input name="sdt" type ="text" size="20" placeholder="max 20"><br><br>
            <input name="submit" type="submit" value="Sửa" >
        </form>
        <a href="index.php">Back</a>
    </body>
    
    
</html>
