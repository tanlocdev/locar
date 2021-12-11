<?php
if (isset($_POST['emailsubscibe'])) {
  $subscriberemail = $_POST['subscriberemail'];
  $sql = "SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
  $query = $dbh->prepare($sql);
  $query->bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  if ($query->rowCount() > 0) {
    echo "<script>alert('Already Subscribed.');</script>";
  } else {
    $sql = "INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
      echo "<script>alert('Subscribed successfully.');</script>";
    } else {
      echo "<script>alert('Something went wrong. Please try again');</script>";
    }
  }
}
?>

<footer>
  <div class="footer-top" style="background-color:rgb(127, 179, 213 );">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1"></div>

        <div class="col-md-3">
          <a href="index.php"><img src="assets/images/logo2.png" height="100"> </a>
          <h6>locars company</h6>
          <ul>
            <li><a href="page.php?type=aboutus">Giới thiệu</a></li>
            <li><a href="page.php?type=faqs">Câu hỏi thường gặp</a></li>
            <li><a href="page.php?type=privacy">Chính sách bảo mật</a></li>
            <li><a href="page.php?type=terms">Điều khoản sử dụng</a></li>
            <li><a href="admin/">Admin</a></li>
          </ul>
        </div>
        <div class="col-md-3 text-white" style="color:aliceblue;">

          <h6 class="center">Giờ làm việc</h6>

          <p>Thứ hai - thứ sáu: 7:00 am - 20:00 pm</p>
          <p>Cuối tuần: 7:00 am - 5:00 pm</p>

          <hr class="light">
          <h6>Chi nhánh </h6>


          <p>321 - Đường Trần Hoàng Na, Ninh Kiều, Cần Thơ</p>
          <p>Tel. 077-2125457 &nbsp; </p>
          <p>Email: locars88@gmail.com</p>

        </div>
        <div class="col-md-1"></div>

        <div class="col-md-3 col-sm-6">
          <h6><b>Đăng ký nhận thông tin mới nhất</b> &ensp;<i class="fa fa-envelope"></i></h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control " required placeholder="Nhập địa chỉ email của bạn" />
              </div> <br>
              <button type="submit" name="emailsubscibe" class="btn btn-block"><b>Đăng ký nhận thông tin</b> <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">* Chúng tôi sẽ gửi thông báo cho bạn khi có những chính sách khuyến mãi ưu đãi, những mẫu xe mới nhất..</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom" style="background-color: steelblue;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-3 text-center">
          <div class="footer_widget">
            <p style="font-size: 20px;">Truy cập ngay: &copy; www.locars.com.vn</p>
           <br>
            <p class="copy-right">Copyright &copy; 2021 Locars</p>
          </div>
        </div>
        <!-- <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2021 Locars</p>
        </div> -->
      </div>
    </div>
  </div>
</footer>