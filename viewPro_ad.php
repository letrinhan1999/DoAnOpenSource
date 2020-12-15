<!-- TRANG XEM TẤT CẢ SẢN PHẨM ADMIN -->
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
    .container{
        margin-left: 70px;
        margin-top: 50px;
    }
    .giay_col{
        margin-bottom: 30px;
          
    }
    .card{
        box-shadow: 1px 1px 7px #000000;
    }



 


 




    .username {
        font-size: 20px;
        font-family: 'FS Core Magic Rough';
        font-weight: bold;
        color: #ffffff;

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
            

            <!-- grids_of_4 -->
            <div class="container">
                    <div class="grid-product">
                        <div class="all-product">
                            <?php
                                $trang=1;
                                $xeAll=9;
                                $para=array();
                                if(isset($_GET['trang'])){
                                    $trang = $_GET['trang'];
                                }
                                $sql = "select * from xe";
                                $sql .= ' limit '.($trang-1)*$xeAll.','.$xeAll;
                                $stmt = $conn->prepare($sql);
                                $stmt->execute($para);
                                
                                while ($xe = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                
                            ?>
                            <div class="col-md-4 giay_col">
                                <div class="card">
                                    <a href="single.php?maxe=<?php echo $xe['maxe']; ?>"><img
                                            class="img-responsive chain moto_image"
                                            src="images/pro_img/<?php echo explode(',', $xe['hinh'])[0]; ?>" alt=" " /></a>
                                    <span class="star"> </span>
                                    <div class="grid-chain-bottom">
                                        <h6><a href="single.php?maxe=<?php echo $xe['maxe']; ?>"><?php echo $xe['tenxe']; ?></a>
                                        </h6>
                                        <div class="star-price">
                                            <div class="dolor-grid">
                                                <span class="actual"><?php echo number_format($xe['gia']); ?> VND</span>
                                                <!-- <span class="reducedfrom">400$</span> -->
                                                <span class="rating">
                                                    <input type="radio" class="rating-input" id="rating-input-1-5"
                                                        name="rating-input-1">
                                                    <label for="rating-input-1-5" class="rating-star1"> </label>
                                                    <input type="radio" class="rating-input" id="rating-input-1-4"
                                                        name="rating-input-1">
                                                    <label for="rating-input-1-4" class="rating-star1"> </label>
                                                    <input type="radio" class="rating-input" id="rating-input-1-3"
                                                        name="rating-input-1">
                                                    <label for="rating-input-1-3" class="rating-star"> </label>
                                                    <input type="radio" class="rating-input" id="rating-input-1-2"
                                                        name="rating-input-1">
                                                    <label for="rating-input-1-2" class="rating-star"> </label>
                                                    <input type="radio" class="rating-input" id="rating-input-1-1"
                                                        name="rating-input-1">
                                                    <label for="rating-input-1-1" class="rating-star"> </label>
                                                </span>
                                            </div>
                                            <a class="now-get get-cart" href="#">ADD TO CART</a>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                                
                            }
                            ?>

                <!-- Tinh tong so xe -->
                <?php
                    $sql="select count(*) from xe";
                    $stmt=$conn->prepare($sql);
                    $stmt->execute();
                    $tongxe=$stmt->fetchColumn();
                    
                    $sotrang=ceil($tongxe/$xeAll);

                    echo '<span style="font-size: 20px;">Trang: </span> ';
                    if(isset($_GET['maloai']))
                        for($i=1;$i<=$sotrang;$i++)
                            echo '<a href="viewType_admin.php?maloai='.$_GET['maloai'].'&trang='.$i.'" class="pages"> '.$i.' </a> ';

                    else {
                        for($i=1;$i<=$sotrang;$i++)
                            echo '<a href="viewType_admin.php?trang='.$i.'"class="pages"> '.$i.' </a> ';
                    }
                ?>

                        </div>
                        <div class="clearfix"> </div>
                    <!-- </div> -->
                </div>
            </div>

    </div>


    <!-- FOOTER -->

    <?php
        include('./script.php');
    ?>

</body>

</html>