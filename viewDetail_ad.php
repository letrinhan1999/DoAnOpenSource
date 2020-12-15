<?php
    include('./includes/admin/head.php');
    include('./includes/connect.php');
    session_start();
    /* if(!isset($_SESSION['username'])){
        echo '<script type="text/javascript">
            window.location = "loginAdmin.php" </script>';
    } */

?>

<style>
    .username{
        font-size: 20px;
        font-family: 'FS Core Magic Rough';
        font-weight: bold;
        color: #ffffff;
        
    }


    .type_body{
        text-align: center;
    }
    .type{
        margin-left: 130px;
        
    }
    .card-header{
        text-align: center;
        font-size: 20px;
        font-weight: 900;
    }
    .table_content{
        margin-top: 100px;
        margin-bottom: 10px;
        margin-left: 50px;
        width: 1200px;
        
    }
    .card{
        box-shadow: 1px 1px 5px #000000;
    }
    .card-header{
        background: #dddddd;
        font-size: 30px;
    }

    .search{
        width: 400px;
        margin-bottom: 11px;
    }
</style>

</head>
<body>
    <!-- Nav and sidebar -->
    <input type="checkbox" id="check">
    <header>
        <?php
            include "./includes/admin/header_admin.php";
        ?>
    </header>

    <!-- Menu Left -->
    <div class="sidebar">
        <?php
            include "./includes/admin/menuleft_ad.php";
        ?>
    </div>
    
    <?php
    $para=array();
    $sql1 = 'SELECT * FROM `order` INNER JOIN chitiet_donhang ON `order`.ma_donhang = chitiet_donhang.ma_donhang';
    if(isset($_GET['madh'])){
        $sql = "select * from `chitiet_donhang` where ma_donhang = ?";
        $para[]=$_GET['madh'];
    }else
        $sql = "select * from `chitiet_donhang`";
    $stmt=$conn->prepare($sql);
    $stmt->execute($para);

    ?>
    
    <div class="content">
        
        <div class="row table_content">
            <div class="col-md-12 col-sm-6 mt-1">
                <div class="card">
                    <div class="card-header">
                        QUẢN LÝ CHI TIẾT ĐƠN HÀNG
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="form-inline" action="#" method="GET">
                                    <div class="form-group mb-2 mr-2">
                                        <label for="username" class="sr-only">Tìm Kiếm</label>
                                        <input type="text" class="form-control search" id="username" name="username" placeholder="Search name">
                                    </div>
                                    <button type="submit" class="btn btn-info mb-2">Tìm Kiếm</button>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <h5 class="card-title"><a href="viewDetail_ad.php">Danh Sách Chi Tiết Đơn Hàng</a></h5>
                            <table class="table table-hover table-sm table-responsive-lg">
                                <thead>
                                <tr>
                                    <th scope="col">Mã chi tiết đơn hàng</th>
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Mã xe</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Giá</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    <tr>
                                        <td><?= $data['mactdh'] ?></td>
                                        <td><?= $data['ma_donhang'] ?></td>
                                        <td><?= $data['maxe'] ?></td>
                                        <td><?= $data['soluong'] ?></td>
                                        <td><?= number_format($data['gia']) ?></td>
                                        <td><a href="viewOrder_ad.php?madh=<?= $data['ma_donhang'] ?>">Xem đơn hàng</a></td>
                                        <td class="column-verticallineMiddle form-inline">                                           
                                            <form action="#" method="POST">
                                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
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