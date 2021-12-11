<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Locars - Website cho thuê xe</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/images/logo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>

<body>

    <!-- Start Switcher -->

    <!-- /Switcher -->

    <!--Header-->
    <?php include('includes/header.php'); ?>
    <!-- /Header -->

    <!--Page Header-->
    <section class="page-header listing_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1><b>Danh sách xe</b></h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="#">Trang chủ</a></li>
                    <li>Danh sách xe</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->
    <div class="container">
       <br>

        <div class="input-group">
            <span style="border-top-left-radius:50px; border-bottom-left-radius: 50px; " class="input-group-addon"><b class="uppercase">Tìm xe </b>&ensp;<i class="fa fa-search fa-lg" ></i></span>
            <input style="border: solid 1px; border-top-right-radius:50px; border-bottom-right-radius: 50px; background-color:white; " type="text" name="search_text" id="search_text" placeholder="Nhập tên xe, hãng xe, giá, hoặc mô tả của xe..." class="form-control" />
        </div>    
    </div>
    <br>

    <!--Listing-->
    <section class="listing-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="result-sorting-wrapper">
                        <div class="sorting-count">

                            <p><span><?php echo htmlentities($cnt); ?> Xe trong danh sách</span></p>
                        </div>
                    </div>
                    <div class="" id="result"></div>
                </div>

                <!--Side-Bar-->
                <aside class="col-md-3 col-md-pull-9">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-filter" aria-hidden="true"></i> <b>Bộ lọc tìm xe</b></h5>
                        </div>
                        <div class="sidebar_filter">
                            <form action="#" method="post">
                               <!--<div class="input-group">
                                    <input style="border: solid 1px;" type="text" name="search_text" id="search_text" placeholder="Nhập tên xe, hãng xe, giá, hoặc mô tả của xe..." class="form-control" />

                                </div>-->
                                <div class="form-group select">
                                    <select class="form-control" name="brand">
                                        <option>Chọn hãng</option>



                                    </select>
                                </div>
                                <div class="input-group">
                                    <select class="form-control" type="text" name="search_text" id="search_text">
                                        <option>Chọn loại nhiên liệu</option>
                                        <option value="Petrol">Petrol</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="CNG">CNG</option>
                                    </select>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-car" aria-hidden="true"></i> <b>Một số xe gần đây</b></h5>
                        </div>
                        <div class="recent_addedcars">
                            <ul>
                                <?php $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand order by id desc limit 4";
                                $query = $dbh->prepare($sql);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $result) {  ?>

                                        <li class="gray-bg">
                                            <div class="recent_post_img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" alt="image"></a> </div>
                                            <div class="recent_post_title"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?> , <?php echo htmlentities($result->VehiclesTitle); ?></a>
                                                <p class="widget_price"><?php echo htmlentities(number_format($result->PricePerDay, 0, ".", ".") . ' VND'); ?> / Ngày</p>
                                            </div>
                                        </li>
                                <?php }
                                } ?>

                            </ul>
                        </div>
                    </div>
                </aside>
                <!--/Side-Bar-->
            </div>
        </div>
    </section>
    <!-- /Listing-->

    <!--Footer -->
    <?php include('includes/footer.php'); ?>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <?php include('includes/login.php'); ?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php'); ?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php'); ?>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>

<script>
    $(document).ready(function() {
        load_data();

        function load_data(query) {
            $.ajax({
                url: "fetch.php",
                method: "post",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>