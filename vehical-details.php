<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (isset($_POST['submit'])) {
  $fromdate = $_POST['fromdate'];
  $todate = $_POST['todate'];
  $message = $_POST['message'];
  $tinhthanh = $_POST['tinhthanh'];
  
  $useremail = $_SESSION['login'];
  $status = 0;
  $vhid = $_GET['vhid'];
  $sql = "INSERT INTO  tblbooking(userEmail,VehicleId,FromDate,ToDate,message,Status,tinhthanh) VALUES(:useremail,:vhid,:fromdate,:todate,:message,:status,:tinhthanh)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
  $query->bindParam(':vhid', $vhid, PDO::PARAM_STR);
  $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
  $query->bindParam(':todate', $todate, PDO::PARAM_STR);
  $query->bindParam(':message', $message, PDO::PARAM_STR);
  $query->bindParam(':status', $status, PDO::PARAM_STR);
  $query->bindParam(':tinhthanh', $tinhthanh, PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    echo "<script>alert('Đã đặt xe thành công.');</script>";
    echo "<script type='text/javascript'> document.location = 'my-booking.php'; </script>";
  } else {
    echo "<script>alert('Có lỗi. Vui lòng thử lại');</script>";
  }
}

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
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="assets/images/logo.jpg">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">


</head>

<body>

  <!-- Start Switcher -->

  <!-- /Switcher -->

  <!--Header-->
  <?php include('includes/header.php'); ?>
  <!-- /Header -->

  <!--Listing-Image-Slider-->

  <?php
  $vhid = intval($_GET['vhid']);
  $sql = "SELECT tblvehicles.*,tblbrands.BrandName,tblbrands.id as bid  from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.id=:vhid";
  $query = $dbh->prepare($sql);
  $query->bindParam(':vhid', $vhid, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  if ($query->rowCount() > 0) {
    foreach ($results as $result) {
      $_SESSION['brndid'] = $result->bid;
  ?>

      <section id="listing_img_slider">
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage2); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage3); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
        <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage4); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
        <?php if ($result->Vimage5 == "") {
        } else {
        ?>
          <div><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage5); ?>" class="img-responsive" alt="image" width="900" height="560"></div>
        <?php } ?>
      </section>
      <!--/Listing-Image-Slider-->


      <!--Listing-detail-->
      <section class="listing-detail">
        <div class="container-fluid">
          <div class="listing_detail_head row">
            <div class="col-md-1"></div>
            <div class="col-md-7">
              <h2><?php echo htmlentities($result->BrandName); ?> , <?php echo htmlentities($result->VehiclesTitle); ?></h2>
            </div>

            <div class="col-md-1"></div>
          </div>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-7">
              <div class="row">
                <div class="main_features col-md-5">
                  <ul>

                    <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                      <h5><?php echo htmlentities($result->ModelYear); ?></h5>
                      <p>Đời</p>
                    </li>
                    <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                      <h5><?php echo htmlentities($result->FuelType); ?></h5>
                      <p>Loại nhiên liệu</p>
                    </li>

                    <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
                      <h5><?php echo htmlentities($result->SeatingCapacity); ?></h5>
                      <p>Chỗ ngồi</p>
                    </li>
                  </ul>
                </div>
                <div class="listing_detail_head row col-md-7">

                  <div class="price_info">
                    <p><?php echo htmlentities(number_format($result->PricePerDay, 0, ".", ".") . ' VND',); ?></p><b>/ Ngày</b>



                  </div>
                </div>
              </div>
              <div class="listing_more_info">
                <div class="listing_detail_wrap">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs gray-bg" role="tablist">
                    <li role="presentation" class="active"><a class="fa  fa-info-circle fa-2x" href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab"> Mô tả </a></li>

                    <li role="presentation"><a class="fa fa-cog" href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab" class=""> Trang bị</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content ">
                    <!-- vehicle-overview -->
                    <div role="tabpanel" class="tab-pane active" id="vehicle-overview">

                      <p><?php echo htmlentities($result->VehiclesOverview); ?></p>
                    </div>


                    <!-- Accessories -->
                    <div role="tabpanel" class="tab-pane" id="accessories">
                      <!--Accessories-->
                      <table>
                        <thead>
                          <tr>
                            <th colspan="2">Trang bị</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Treo khí nén </td>
                            <?php if ($result->AirConditioner == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Phanh ABS</td>
                            <?php if ($result->AntiLockBrakingSystem == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Power Steering</td>
                            <?php if ($result->PowerSteering == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>


                          <tr>

                            <td>Kính 2 lớp</td>

                            <?php if ($result->PowerWindows == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Màn hình cảm ứng </td>
                            <?php if ($result->CDPlayer == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Ghế da</td>
                            <?php if ($result->LeatherSeats == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Khóa vi sai</td>
                            <?php if ($result->CentralLocking == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Khóa cửa thông minh</td>
                            <?php if ($result->PowerDoorLocks == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>
                          <tr>
                            <td>Phanh tay điện tử</td>
                            <?php if ($result->BrakeAssist == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php  } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Túi khí hàng ghế trước</td>
                            <?php if ($result->DriverAirbag == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>Túi khí hành khách</td>
                            <?php if ($result->PassengerAirbag == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                          <tr>
                            <td>HSTC</td>
                            <?php if ($result->CrashSensor == 1) {
                            ?>
                              <td><i class="fa fa-check" aria-hidden="true"></i></td>
                            <?php } else { ?>
                              <td><i class="fa fa-close" aria-hidden="true"></i></td>
                            <?php } ?>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

              </div>
          <?php }
      } ?>

            </div>

            <!--Side-Bar-->
            <aside class="col-md-3">

              <div class="share_vehicle text-center" style="background-color: steelblue;">
                <p>LOCARS: <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a> <a href="#"></a> <a href="#"><i class="fa fa-tag" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-pin-map" aria-hidden="true"></i></a> </p>
              </div>
              <div class="sidebar_widget">
                <div class="widget_heading text-center">
                  <p><i class="fa fa-calendar-plus-o fa-2x" aria-hidden="true"></i> <b style="font-size: 22px;">ĐẶT XE NGAY</b></p>
                </div>
                <form method="post">
                  <div class="form-group">
                    <label>Từ ngày:</label>
                    <input type="date" class="form-control" name="fromdate" placeholder="Từ ngày(dd/mm/yyyy)" required>
                  </div>
                  <script>
                    var today = new Date().toISOString().split('T')[0];
                    document.getElementsByName("fromdate")[0].setAttribute('min', today);
                  </script>
                  <div class="form-group">
                    <label>Đến ngày:</label>
                    <input type="date" class="form-control" name="todate" placeholder="Đến ngày(dd/mm/yyyy)" required>
                  </div>
                  <script>
                    var today = new Date().toISOString().split('T')[0];
                    document.getElementsByName("todate")[0].setAttribute('min', today);
                  </script>



                  <div class="form-group">
                    <label>Tỉnh thành</label><br>

                    <select name="tinhthanh" class="form-control" required>
                      <option value="#" selected>- Chọn tỉnh thành -
                      <option value="An Giang">An Giang
                      <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                      <option value="Bắc Giang">Bắc Giang
                      <option value="Bắc Kạn">Bắc Kạn
                      <option value="Bạc Liêu">Bạc Liêu
                      <option value="Bắc Ninh">Bắc Ninh
                      <option value="Bến Tre">Bến Tre
                      <option value="Bình Định">Bình Định
                      <option value="Bình Dương">Bình Dương
                      <option value="Bình Phước">Bình Phước
                      <option value="Bình Thuận">Bình Thuận
                      <option value="Bình Thuận">Bình Thuận
                      <option value="Tp.Cần Thơ">Cần Thơ
                      <option value="Cà Mau">Cà Mau
                      <option value="Cao Bằng">Cao Bằng
                      <option value="Tp.Đà Nẵng">Đà Nẵng
                      <option value="Đắk Lắk">Đắk Lắk
                      <option value="Đắk Nông">Đắk Nông
                      <option value="Điện Biên">Điện Biên
                      <option value="Đồng Nai">Đồng Nai
                      <option value="Đồng Tháp">Đồng Tháp
                      <option value="Đồng Tháp">Đồng Tháp
                      <option value="Gia Lai">Gia Lai
                      <option value="Hà Giang">Hà Giang
                      <option value="Hà Nam">Hà Nam

                      <option value="Tp.Hà Nội">Hà Nội
                      <option value="Hà Tĩnh">Hà Tĩnh
                      <option value="Hải Dương">Hải Dương
                      <option value="Tp.Hải Phòng">Hải Phòng
                      <option value="Hậu Giang">Hậu Giang
                      <option value="Hòa Bình">Hòa Bình
                      <option value="Hưng Yên">Hưng Yên
                      <option value="Khánh Hòa">Khánh Hòa
                      <option value="Kiên Giang">Kiên Giang
                      <option value="Kon Tum">Kon Tum
                      <option value="Lai Châu">Lai Châu
                      <option value="Lâm Đồng">Lâm Đồng
                      <option value="Lạng Sơn">Lạng Sơn
                      <option value="Lào Cai">Lào Cai
                      <option value="Long An">Long An
                      <option value="Nam Định">Nam Định
                      <option value="Nghệ An">Nghệ An
                      <option value="Ninh Bình">Ninh Bình
                      <option value="Ninh Thuận">Ninh Thuận
                      <option value="Phú Thọ">Phú Thọ
                      <option value="Quảng Bình">Quảng Bình
                      <option value="Quảng Bình">Quảng Bình
                      <option value="Quảng Ngãi">Quảng Ngãi
                      <option value="Quảng Ninh">Quảng Ninh
                      <option value="Quảng Trị">Quảng Trị
                      <option value="Sóc Trăng">Sóc Trăng
                      <option value="Sơn La">Sơn La
                      <option value="Tây Ninh">Tây Ninh
                      <option value="Thái Bình">Thái Bình
                      <option value="Thái Nguyên">Thái Nguyên
                      <option value="Thanh Hóa">Thanh Hóa
                      <option value="Thừa Thiên Huế">Thừa Thiên Huế
                      <option value="Tiền Giang">Tiền Giang
                      <option value="Trà Vinh">Trà Vinh
                      <option value="Tuyên Quang">Tuyên Quang
                      <option value="Vĩnh Long">Vĩnh Long
                      <option value="Vĩnh Phúc">Vĩnh Phúc
                      <option value="Yên Bái">Yên Bái
                      <option value="Phú Yên">Phú Yên
                      <option value="TP  HCM">TP.HCM
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Ghi chú</label>
                    <textarea rows="4" class="form-control" name="message" placeholder="Nhập ghi chú" required></textarea>
                  </div>
                  
                  <?php if ($_SESSION['login']) { ?>
                    <div class="form-group">
                      <button type="submit" class="btn btn-block" style="width: 230px;" name="submit" value="ĐẶT XE"><b>ĐẶT XE</b></button>
                    </div>
                  <?php } else { ?>
                    <a href="#loginform" class="btn btn btn-block uppercase" data-toggle="modal" data-dismiss="modal"><b>Đăng nhập để Đặt ngay</b></a>

                  <?php } ?>

                </form>
              </div>
              <div class="col-md-1"></div>
            </aside>
            <!--/Side-Bar-->
          </div>

          <div class="space-20"></div>
          <div class="divider"></div>

          <!--Similar-Cars-->
          <div class="similar_cars">
            <h3><b class="uppercase">Những xe tương tự</b></h3>
            <div class="row">
              <?php
              $bid = $_SESSION['brndid'];
              $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblvehicles.VehiclesBrand=:bid";
              $query = $dbh->prepare($sql);
              $query->bindParam(':bid', $bid, PDO::PARAM_STR);
              $query->execute();
              $results = $query->fetchAll(PDO::FETCH_OBJ);
              $cnt = 1;
              if ($query->rowCount() > 0) {
                foreach ($results as $result) { ?>
                  <div class="col-md-3 grid_listing">
                    <div class="product-listing-m gray-bg">
                      <div class="product-listing-img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1); ?>" class="img-responsive" alt="image" /> </a>
                      </div>
                      <div class="product-listing-content">
                        <h5><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->BrandName); ?> , <?php echo htmlentities($result->VehiclesTitle); ?></a></h5>
                        <p class="list-price"><?php echo htmlentities(number_format($result->PricePerDay, 0, ".", ".") . ' VND',); ?></p>

                        <ul class="features_list">

                          <li><i class="fa fa-user fa-lg" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity); ?> Chỗ</li>
                          <li><i class="fa fa-calendar fa-lg" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear); ?> Mẫu</li>
                          <li><i class="fa fa-car fa-lg" aria-hidden="true"></i><?php echo htmlentities($result->FuelType); ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
              <?php }
              } ?>

            </div>
          </div>
          <!--/Similar-Cars-->

        </div>
      </section>
      <!--/Listing-detail-->

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

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/interface.js"></script>
      <script src="assets/switcher/js/switcher.js"></script>
      <script src="assets/js/bootstrap-slider.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>