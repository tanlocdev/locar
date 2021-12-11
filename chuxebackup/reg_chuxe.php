<?php
//error_reporting(0);
if(isset($_POST['signup']))
{
$fname=$_POST['fullname'];
$email=$_POST['emailid']; 
$mobile=$_POST['mobileno'];
$password=md5($_POST['password']); 
$sql="INSERT INTO  chuxe(FullName,EmailId,ContactNo,Password) VALUES(:fname,:email,:mobile,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Đăng ký thành công! Bây giờ bạn có thể đăng nhập ngay');</script>";
}
else 
{
echo "<script>alert('Đã xảy ra lỗi. Vui lòng thử lại');</script>";
}
}

?>


<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Mật khẩu và xác nhận mật khẩu không khớp !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>

<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/locars/admin/img/logo.jpg">

    <title>Locars | Admin Đăng nhập</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/fileinput.min.css">
    <link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="login-page bk-img" style="background-image: url(img/background3.jpg);">
        <div class="form-content">
            <div class="container-fluid">

                <div class="row">

                    <br>
                    <div class="col-md-6 col-md-offset-3">
                      
                        <h1 class="text-center text-bold text-light mt-4x">CHỦ XE</h1>
                        <h5 class="text-center text-bold text-light">Locars - Website cho thuê xe ô tô</h5>
                        <br>
                        <div class="well row pt-2x pb-3x bk-light">
                            <h1 class="text-center text-bold mt-2x">ĐĂNG KÝ</h1>
                            <div class="col-md-8 col-md-offset-2">
                            <form  method="post" name="signup" onSubmit="return valid();">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Họ tên" required="required">
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control" name="mobileno" placeholder="Số điện thoại" maxlength="10" required="required">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Đại chỉ email - Dùng để đăng nhập" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Xác nhận mật khẩu" required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">Tôi đồng ý với <a href="#">Các điều khoản và chính sách sử dụng</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Đăng Ký" name="signup" id="submit" class="btn btn-block btn-primary">
                </div>
              </form>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Loading Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <script src="js/Chart.min.js"></script>
    <script src="js/fileinput.js"></script>
    <script src="js/chartData.js"></script>
    <script src="js/main.js"></script>

</body>

</html>



