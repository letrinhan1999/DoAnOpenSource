<!-- TRANG XEM TẤT CẢ LOẠI SẢN PHẨM ADMIN -->
<?php
    include('./includes/admin/head.php');
    include('./includes/connect.php');
    session_start();
    if(!isset($_SESSION['username'])){
        echo '<script type="text/javascript">
            window.location = "loginAdmin.php" </script>';
    }
    /* $sql="select * from loai";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $loai = $stmt->fetchAll(PDO::FETCH_ASSOC); */
?>

<!DOCTYPE html>
<html>

<head>
    <title>Document</title>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/my.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/offcanvas/offcanvas.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <script
        type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script src="js/jquery.min.js"></script>

    <style>

        .content{
            margin-top: 100px;
            margin-left: 250px;
            width: 1000px;
        }

        .username {
            font-size: 20px;
            font-family: 'FS Core Magic Rough';
            font-weight: bold;
            color: #ffffff;

        }

        /* My CSS */
        table,
        th,
        td {
            border: 1px solid #868585;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
        }

        table tr:nth-child(odd) {
            background-color: #eee;
        }

        table tr:nth-child(even) {
            background-color: white;
        }

        table tr:nth-child(1) {
            background-color: skyblue;
        }
        h1{
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            font-family: 'FS Core Magic Rough';
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
        <!-- <div class="women-product"> -->

        <?php
            $sql = "select * from loai";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
        ?>
        <h1>Danh sách loại sản phẩm</h1>
        <div class="grid-product">
            <div class="all-product">
                <table>
                    <tr>
                        <th>Mã loại</th>
                        <th>Tên Loại</th>
                    </tr>
                <?php
                    while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $data['maloai'] ?></td>
                        <td><?php echo $data['tenloai'] ?></td>
                    </tr>
                <?php
                    }
                ?>
                </table>
            </div>
        </div>

        

    </div>


    <!-- FOOTER -->

    <?php
        include('./script.php');
    ?>

</body>

</html>