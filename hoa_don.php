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
            <h1 align="center">Hóa đơn</h1>
            <table border="1" align="center">
        <tr>
            <td>Mã hóa đơn</td>
            <td>Tên hóa đơn</td>
            <td>Ngày lập</td>
            <td>Mã khách hàng</td>
 
        </tr>
            
        <?php
            $sql = 'SELECT *from hoa_don ';
            $result = mysql_query($sql);
                while($data = mysql_fetch_assoc($result)){
                 $id_kh = $data['id_hd'];
                 $ten_kh = $data['ten_hd'];
                 $dia_chi = $data['date_lap'];
                 $mail = $data['khach_hang_id_kh'];
                 
                 
                 echo"<tr>
                  <td>$id_kh</td>
                  <td>$ten_kh</td>
                 <td>$dia_chi</td>
                 <td>$mail</td>
         
                
                      </tr>";
                }
    
        ?>
        
        
            </table>
        </div>
        <br>
        <br>
        
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
        
    </body>
</html>
