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
            
        $id_sp = $_POST['id_sp'];
     
        
        $insert = mysql_query("DELETE FROM san_pham WHERE id_sp = '$id_sp'");
        }
        if(isset($insert)){
            echo"Success";
        }else{
            echo"Error";
        }
        ?>
        <h1 align="center">Xóa sản phẩm</h1>
        <form name="addkh" action="" method="post" align="center">
            Mã sản phẩm: <input name="id_sp" type ="text" size="20"  placeholder="chi duoc nhap duoi 20"><br><br>
         
            <input name="submit" type="submit" value="Xóa" >
        </form>
        <a href="san_pham.php">Back</a>
    </body>
    
</html>
