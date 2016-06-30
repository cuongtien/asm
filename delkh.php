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
     
        
        $insert = mysql_query("DELETE FROM khach_hang WHERE id_kh = '$id_kh'");
        }
        if(isset($insert)){
            echo"Success";
        }else{
            echo"Error";
        }
        ?>
        <h1 align="center">Xóa khách hàng</h1>
        <form name="addkh" action="" method="post" align="center">
            Mã khách hàng: <input name="id_kh" type ="text" size="20"  placeholder="chi duoc nhap so duoi 20"><br><br>
         
            <input name="submit" type="submit" value="Xóa" >
        </form>
         <a href="index.php">Back</a>
    </body>
    
</html>
