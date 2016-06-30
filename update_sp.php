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
        $ten_sp = $_POST['ten_sp'];
        $soluong = $_POST['soluong'];
        $id_lsp = $_POST['id_lsp'];
        $loai_san_pham_id_lsp = $_POST['loai_san_pham_id_lsp'];
        
        $insert = mysql_query("UPDATE san_pham SET ten_sp='$ten_sp', soluong='$soluong',id_lsp='$id_lsp',loai_san_pham_id_lsp='$loai_san_pham_id_lsp' WHERE id_sp='$id_sp'");
        }
        if(isset($insert)){
            echo"Success";
        }else{
            echo"Error";
        }
        ?>
        <h1 align="center">Sửa khách hàng</h1>
        <form name="addkh" action="" method="post" align="center">
            Mã sản phẩm:<br> <input name="id_sp" type ="text" size="20"  placeholder="chi duoc nhap so va duoi 20"><br><br>
            Tên sản phẩm:<br> <input name="ten_sp" type ="text" size="20" placeholder="max 20"><br><br>
            Số lượng: <br><input name="soluong" type ="text" size="20" placeholder="max 20"><br><br>
            Mã loại sản phẩm:<br> <input name="id_lsp" type ="text" size="20" placeholder="max 20"><br><br>
            Xác nhận mã loại sản phẩm:<br> <input name="loai_san_pham_id_lsp" type ="text" size="20" placeholder="max 20"><br><br>
     
            <input name="submit" type="submit" value="Sửa" >
        </form>
        <div id="lsp">
            <h3>Chú thích mã loại sản phẩm</h3>
            <p>lsp1: đồ điện tử</p>
            <p>lsp2: đồ gia dụng</p>
            <p>lsp3: đồ thể thao</p>
        </div>
        <a href="san_pham.php">Back</a>
    </body>
    <style>
        #lsp{
            width: 300px;
            height: 170px;
            border:1px solid black;
            text-align: center;
            float: right;
        }
       
    </style>
    
</html>
