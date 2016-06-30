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
?>
        <div id="menu">
            <a href ="index.php">Thông tin khách hàng</a>
            <a href ="san_pham.php">Sản phẩm</a>
            <a href ="hoa_don.php">Hóa đơn</a>
            
        </div>
        <div id="content">
            <h1 align="center">Quản lý sản phẩm</h1>
            <table border="1" align="center">
        <tr>
            <td>Mã sản phẩm</td>
            <td>Tên sản phẩm</td>
            <td>Số lượng</td>
            <td>Mã số loại sản phẩm</td>
            <td>Loại sản phẩm</td>
        </tr>
            
        <?php
            $sql = 'SELECT a.id_sp, a.ten_sp,a.soluong,a.id_lsp ,b.loai_sp

    FROM san_pham a, loai_san_pham b WHERE a.id_lsp = b.id_lsp';
            $result = mysql_query($sql);
                while($data = mysql_fetch_assoc($result)){
                 $id_sp = $data['id_sp'];
                 $ten_sp = $data['ten_sp'];
                 $soluong = $data['soluong'];
                 $mail = $data['id_lsp'];
                 $maila = $data['loai_sp'];
                 
                 
                 echo"<tr>
                  <td>$id_sp</td>
                  <td>$ten_sp</td>
                 <td>$soluong</td>
                 <td>$mail</td>
                     <td>$maila</td>
                    
                  
                      </tr>";
                }
    
        ?>
        
        
            </table>
        </div>
        <br>
        <br>
        
    <center> <div class="menu1">
        <a href="add_sp.php">Thêm</a>
        <a href="del_sp.php">Xóa</a>
         <a href="update_sp.php">Sửa</a>
        </div></center>
    </body>
     <style>
        #menu{
            margin-left: auto;
            margin-right:auto;
            width: 500px;
            height: 20px;
        }
        #menu a{
            text-decoration: none;
            font-size: 20px;
            color: blue;
            font-weight: bold;
            padding: 15px;
        }
        </style>
</html>
