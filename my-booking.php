<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else {
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
    <!-- Google-Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      /* Full-width input fields */
      input[type=text],
      input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      /* Set a style for all buttons */
      button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      /* Extra styles for the cancel button */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      /* Center the image and position the close button */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }

      img.avatar {
        width: 40%;
        border-radius: 50%;
      }

      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      /* The Modal (background) */
      .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
        padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto;
        /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%;
        /* Could be more or less, depending on screen size */
      }

      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: #000;
        font-size: 35px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: red;
        cursor: pointer;
      }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
        from {
          -webkit-transform: scale(0)
        }

        to {
          -webkit-transform: scale(1)
        }
      }

      @keyframes animatezoom {
        from {
          transform: scale(0)
        }

        to {
          transform: scale(1)
        }
      }

      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
          display: block;
          float: none;
        }

        .cancelbtn {
          width: 100%;
        }
      }
    </style>
  </head>

  <body>

    <!-- Start Switcher -->

    <!-- /Switcher -->

    <!--Header-->
    <?php include('includes/header.php'); ?>
    <!--Page Header-->
    <!-- /Header -->

    <!--Page Header-->
    <section class="page-header profile_page">
      <div class="container-fluid">
        <div class="page-header_wrap">
          <div class="page-heading">
            <h1><b> ĐƠN HÀNG CỦA TÔI</b></h1>
          </div>
          <ul class="coustom-breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li>Đơn hàng của tôi</li>
          </ul>
        </div>
      </div>
      <!-- Dark Overlay-->
      <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <?php
    $useremail = $_SESSION['login'];
    $sql = "SELECT * from tblusers where EmailId=:useremail";
    $query = $dbh->prepare($sql);
    $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    if ($query->rowCount() > 0) {
      foreach ($results as $result) { ?>
        <section class="user_profile inner_pages">
          <div class="container-fluid">
            <div class="container">
              <div class="row">
                <div class="col-md-4">

                  <?php include('includes/sidebar.php'); ?>


                  <div class="col-md-4 ">
                    <div class=" user_profile_info gray-bg " style="width: 600px;">
                      <div class="upload_user_logo"> <img src="assets/images/logo.jpg" alt="image">
                      </div>

                      <div class="dealer_info">
                        <h5><b><?php echo htmlentities($result->FullName); ?></b></h5>
                        <p><?php echo htmlentities($result->Address); ?><br>
                          <?php echo htmlentities($result->City); ?>&nbsp;<?php echo htmlentities($result->Country);
                                                                        }
                                                                      } ?></p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="container">



                <div class="profile_wrap">
                  <!-- <h5 class="uppercase underline"> Đơn hàng của tôi </h5> -->
                  <div class="my_vehicles_list">
                    <ul class="vehicle_listing">
                      <?php
                      $useremail = $_SESSION['login'];
                      $sql = "SELECT tblvehicles.Vimage1 as Vimage1,tblvehicles.VehiclesTitle,tblvehicles.id as vid,tblbrands.BrandName,tblbooking.FromDate,tblbooking.ToDate,tblbooking.message,tblbooking.tinhthanh,tblbooking.Status,tblbooking.PostingDate,tblvehicles.PricePerDay as ppd  from tblbooking join tblvehicles on tblbooking.VehicleId=tblvehicles.id join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblbooking.userEmail=:useremail";
                      $query = $dbh->prepare($sql);
                      $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
                      $query->execute();
                      $results = $query->fetchAll(PDO::FETCH_OBJ);
                      $cnt = 1;
                      if ($query->rowCount() > 0) {
                        foreach ($results as $result) {  ?>
                          <div>
                            <b>Ngày tạo đơn: <?php echo htmlentities($result->PostingDate); ?></b>
                          </div>

                          <li>
                            <div class="vehicle_img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid); ?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" alt="image"></a> </div>
                            <div class="vehicle_title">
                              <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid); ?>"> <?php echo htmlentities($result->BrandName); ?> , <?php echo htmlentities($result->VehiclesTitle); ?></a></h6>
                              <p></p>
                              <p><b>Từ ngày:</b> <?php echo htmlentities($result->FromDate); ?></p>
                              <p><b>Đến ngày:</b> <?php echo htmlentities($result->ToDate); ?></p>
                              <p><b>Số ngày thuê: <?php
                                                  $first_date = strtotime($result->FromDate);
                                                  $second_date = strtotime($result->ToDate);
                                                  $datediff = abs($first_date - $second_date);
                                                  echo floor($datediff / (60 * 60 * 24));
                                                  ?></b></p>
                            </div>
                            <?php if ($result->Status == 1) { ?>
                              <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Đã chấp nhận</a>
                                <div class="clearfix"></div>
                              </div>

                            <?php } else if ($result->Status == 2) { ?>
                              <div class="vehicle_status"> <a href="#" class="btn outline btn-xs" style="color: red;">Đã từ chối</a>
                                <div class="clearfix"></div>
                              </div>

                            <?php } else { ?>
                              <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Đang chờ xác nhận..</a>
                                <div class="clearfix"></div>
                              </div>
                            <?php } ?>
                            <div style="float: left">
                              <p><b>Ghi chú:</b> <?php echo htmlentities($result->message); ?> </p>
                              <p><b>Nơi đến:</b> <?php echo htmlentities($result->tinhthanh); ?> </p>

                              <p><b>Giá thuê: </b> <b style="color: steelblue;"><?php echo htmlentities(number_format($result->ppd * $datediff / (60 * 60 * 24), 0, ".", ".") . ' VND');  ?> </b></p>

                              <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Chi tiết</button>
                            </div>
                            <br>

                          </li>

                      <?php }
                      } ?>


                    </ul>
                  </div>
                </div>


              </div>
              <div id="id01" class="modal">
                <form class="modal-content animate" action="/action_page.php" method="post">
                  <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                  </div>

                  <br style="clear: both">
                  <h3 style="margin-bottom: 5px; text-align: center; font-size: 30px;"> Journey Details </h3>
                  <h6 style="margin-bottom: 25px; text-align: center; font-size: 12px;"> Allow your driver to fill the below form </h6>

                  <h5> Car:&nbsp; <?php echo ($car_name); ?></h5>

                  <h5> Vehicle Number:&nbsp; <?php echo ($car_nameplate); ?></h5>

                  <h5> Rent date:&nbsp; <?php echo ($rent_start_date); ?></h5>

                  <h5> End Date:&nbsp; <?php echo ($rent_end_date); ?></h5>

                  <h5> Fare:&nbsp; Rs. <?php
                                        if ($charge_type == "days") {
                                          echo ($fare . "/day");
                                        } else {
                                          echo ($fare . "/km");
                                        }
                                        ?>
                  </h5>

                  <h5> Driver Name:&nbsp; <?php echo ($driver_name); ?></h5>

                  <h5> Driver Contact:&nbsp; <?php echo ($driver_phone); ?></h5>
                  <?php if ($charge_type == "km") { ?>
                    <div class="form-group">
                      <input type="text" class="form-control" id="distance_or_days" name="distance_or_days" placeholder="Enter the distance travelled (in km)" required="" autofocus>
                    </div>
                  <?php } else { ?>
                    <h5> Number of Day(s):&nbsp; <?php
                                                  $first_date = strtotime($result->FromDate);
                                                  $second_date = strtotime($result->ToDate);
                                                  $datediff = abs($first_date - $second_date);
                                                  echo floor($datediff / (60 * 60 * 24));
                                                  ?></h5>
                    <input type="hidden" name="distance_or_days" value=" <?php
                                                  $first_date = strtotime($result->FromDate);
                                                  $second_date = strtotime($result->ToDate);
                                                  $datediff = abs($first_date - $second_date);
                                                  echo floor($datediff / (60 * 60 * 24));
                                                  ?>">
                  <?php } ?>
                  <input type="hidden" name="hid_fare" value="<?php echo $fare; ?>">

                  <input type="submit" name="submit" value="submit" class="btn btn-success pull-right">

                </form>
              </div>
        </section>
        <!--/my-vehicles-->
        <?php include('includes/footer.php'); ?>

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
  <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  </html>
<?php } ?>