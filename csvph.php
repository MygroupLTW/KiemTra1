<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cơ Sở Vũ Phạm Hàm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\cssbtl.css">
  <link rel="icon" href="google.png" type="image/gif" sizes="16x16">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</head>
<body>
        <style>
                .noidung{
                        padding-top:7cm;
                        padding-left:7cm;
                }
                .leftmenu{
        float : left;
        Width : 15%;
        background-color:lightblue;
        margin-left: 4cm;
        color: brown;
        font-size: 20px;
        text-align: left;
    }
    .leftmenu a{
        float: left;
    display: block;
    color: white;
    text-align:center;
    padding : 14px 16px;
    text-decoration: none;
    
}

.leftmenu a:hover {
   
    color: black;
}
footer{
        margin-top:15cm;
}
                </style>
                
        <?php require('header.php');?>
        <div class = leftmenu>
        Danh mục sản phẩm 
                                         <hr width = 100%/>
                                            <a href ="cookie.php"> Bánh Cookies</a> <br>
                                            <hr width = 100%/>
                                           <a href="bread.php" > Bánh Mỳ</a> <br>
                                           <hr width = 100%/>
                                            
                                            <a href="desert.php" > Đồ uống / Kem</a> <br> <br>
                                            <hr width = 100%/>
                                            Sản phẩm tiêu biểu
                                            <hr width = 100%/>
                                            <img style="float:right"  width = "30%" src ="images\anh1l.png"><a href =""><p style="font-size: 70%"> Kẹo Hạnh Nhân</p></a> <br>
                                            <hr width = 100%/>
                                            <img style="float:right"  width = "30%" src ="images\anhl2.png"> <a href ><p style="font-size: 70%"> Bánh Đậu Đỏ <br> Bơ Sữa</p></a> <br>
                                           <hr width = 100%/>
                                            
                                           <img style="float:right" width = "30%" src ="images\anhl3.png">  <a href ><p style="font-size: 80%"> Đại Ngàn</p></a>
                                      </div>
        <div class = noidung>
               <p> Địa chỉ: B18 Vinhome Gardenia, Hàm Nghi, Nam Từ Liêm, Hà Nội </p>
               <p> Add: B18 Vinhome Gardenia, Ham Nghi, Nam Tu Liem, Ha Noi</p>
               <p> Phone: 0243378 8898</p>         
</div>
<?php require('footer.php');?>
</body>    
</html>    
