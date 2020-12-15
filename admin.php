<!-- TRANG VIEW ADMIN -->
<?php
    include('./includes/admin/head.php');
    include('./includes/connect.php');
    session_start();
    $sql="select * from loai";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $loai = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if(!isset($_SESSION['username'])){
        echo '<script type="text/javascript">
            window.location = "loginAdmin.php" </script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Document</title>
    <style>
 
    .content{
        margin-top: 100px;


    }
    .form_title{
        margin-bottom: 30px;
    }
    .form_bodyleft{
        margin-left: 50px;
    }
    .form_bodyleft img{
        width: 400px;
        height: 330px;
    }
    .form_title p, .form_bodyright p{
        font-size: 23px;
        font-family: 'FS Core Magic Rough';
        font-weight: bold;
        margin-bottom: -2px;
    }
    .form_bodyright input[type="text"]{
        width: 521px;
        height: 40px;
        border: none;
        outline: none;
        color: #000000;
    }
    .form_title input[type="text"]{
        border: none;
        outline: none;
        width: 600px;
        height: 40px;
        color: #000000; 
    }
    input[type="file"]{
        padding-top: 20px;
    }
    .form_bodyleft ,.form_bodyright{
        padding-top: 20px;
    }
    .drink_item{
        padding-bottom: 40px;
        padding-top: 20px;
    }
    .complete, .add{
        float: right;
    }
    .btn-primary, .btn-success{
        margin: 0 -60px 10px 70px;
    }
    .btn-danger{
        float: right;
        margin-top: -45px;
    }
    textarea{
        border: none;
        outline: none;
        margin-bottom: 10px;
    }
    .username{
        font-size: 20px;
        font-family: 'FS Core Magic Rough';
        font-weight: bold;
        color: #ffffff;
        
    }
    .box1, .box2, .box3{
        width: 300px;
        height: 120px;
        text-align: center;
        font-size: 25px;
        font-weight: bolder;

        
        border: 2px solid #000000;
        box-shadow: 1px 1px 5px #000000;
        border-radius: 5%;

        margin-left: 85px;
    }
    .box1{
        background: #414ce4;
    }
    .box2{
        background: #1db643;
    }
    .box3{
        background: #c7db0d;
    }
    .view_all{
        color: #000000;
        font-size: 18px;
        font-weight: 400;
    }
    .view_all:hover{
        text-decoration: none;
        color: coral;
    }
    .title{
        text-align: center;
        width: 300px;
        
    }
    .type_body{
        text-align: center;
    }

    .card-header{
        text-align: center;
        font-size: 20px;
        font-weight: 900;
    }
    .table_content{
        margin-top: 20px;
        margin-bottom: 10px;
        margin-left: 150px;
        width: 900px;
        
    }
    .card{
        box-shadow: 1px 1px 5px #000000;
    }
    .card-header{
        background: #dddddd;
    }
    </style>
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <?php
            include "./includes/admin/header_ad.php";
        ?>
    </header>

    <!-- Menu Left -->
    <div class="sidebar">
        <?php
            include "./includes/admin/menuleft_ad.php";
        ?>
    </div>


    <div class="content">
        <div class="solieu">
            <div class="row">
                <div class="col-3 box1">QUẢN LÝ <br>
                    <span> <i class="fas fa-user"></i></span><br>
                    <a href="/admin/account" class="view_all">View all</a>
                </div>
                <div class="col-3 box2">LOẠI SẢN PHẨM <br>
                    <span>5 <i class="fas fa-file-invoice"></i></span><br>
                    <a href="/admin/productType" class="view_all">View all</a>
                </div>
                <div class="col-3 box3">SẢN PHẨM <br>
                    <span>10 <i class="fas fa-cocktail"></i></span><br>
                    <a href="/admin/productInfor" class="view_all">View all</a>
                </div>
            </div> 
        </div>
        

        <div class="row table_content">
            <div class="col-md-12 col-sm-6 mt-1">
                <div class="card">
                    <div class="card-header">
                        THỐNG KÊ CÁC LOẠI THỨC UỐNG
                    </div>
                    <div class="card-body">              
                        <table class="table table-responsive type" id="newStudent"> 
                            <thead>
                                <tr>
                                    <th scope="col" class="title">Tên</th>
                                    <th scope="col" class="title">Mã</th>
                                    <th scope="col" class="title">Số Lượng Món</th>
                                </tr>
                            </thead>
                            <body>
                                <% Types.forEach(function(element){ %>
                                <tr>
                                    <td scope="col" class="type_body"><%= element.nameType %></td>
                                    <td scope="col" class="type_body">CF</td>
                                    <td scope="col" class="type_body">8</td>
                                </tr>
                                <% }); %>
                            </body>
                        </table> 
                    </div>
                </div>
            </div>
        </div>

        <div class="row table_content">
            <div class="col-md-12 col-sm-6 mt-1">
                <div class="card">
                    <div class="card-header">
                        THỐNG KÊ CÁC THỨC UỐNG
                    </div>
                    <div class="card-body">              
                        <table class="table table-responsive" id="newStudent"> 
                            <thead>
                                <tr>
                                    <th scope="col" class="title">Loại</th>
                                    <th scope="col" class="title">Tên</th>
                                    <th scope="col" class="title">Giá</th>
                                </tr>
                            </thead>
                            <body>
                                <% Products.forEach(function(loai){ %>
                                    <% loai.products.forEach(function(sp){ %>
                                <tr>
                                    <td scope="col" class="type_body"><%= loai.nameType %></td>
                                    <td scope="col" class="type_body"><%= sp.nameProduct %></td>
                                    <td scope="col" class="type_body"><%= sp.price %></td>
                                </tr>
                                    <% }); %>
                                <% }); %>
                            </body>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
        
    </div>



    <?php
        include('./script.php');
    ?>
   
</body>
</html>