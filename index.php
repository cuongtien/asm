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
            <h1 align="center">Quản lý khách hàng</h1>
            <table border="1" align="center">
        <tr>
            <td>Mã khách hàng</td>
            <td>Tên khách hàng</td>
            <td>Địa chỉ</td>
            <td>Mail</td>
            <td>Số điện thoại</td>
        </tr>
            
        <?php
            $sql = "select * from khach_hang";
            $result = mysql_query($sql);
                while($data = mysql_fetch_assoc($result)){
                 $id_kh = $data['id_kh'];
                 $ten_kh = $data['ten_kh'];
                 $dia_chi = $data['dia_chi'];
                 $mail = $data['mail'];
                 $sdt = $data['sdt'];
                 
                 echo"<tr>
                  <td>$id_kh</td>
                  <td>$ten_kh</td>
                 <td>$dia_chi</td>
                 <td>$mail</td>
                  <td>$sdt</td>
                      </tr>";
                }
    
        ?>
        
        
            </table>
        </div>
        <br>
        <br>
        
    <center> <div class="menu1">
        <a href="addkh.php">Thêm</a>
        <a href="delkh.php">Xóa</a>
         <a href="updatekh.php">Sửa</a>
        </div></center>
    </body>
</html>
