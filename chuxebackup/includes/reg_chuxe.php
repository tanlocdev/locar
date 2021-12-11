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
echo "<script>alert('Đăng ký thành công! Bây giờ bạn có thể đăng nhập Chủ xe ngay');</script>";
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
<div class="modal fade" id="signupform-chuxe">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center"><b>ĐĂNG KÝ CHỦ XE</b></h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  method="post" name="signup" onSubmit="return valid();">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Họ tên" required="required">
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control" name="mobileno" placeholder="Số điện thoại" maxlength="10" required="required">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Đại chỉ email" required="required">
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
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">Tôi đồng ý với <a href="#">Các điều khoản và chính sách sử dụng</a></label>
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">Tôi đồng ý với <a href="#">Các điều khoản và chính sách sử dụng</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Đăng Ký" name="signup" id="submit" class="btn btn-block"> Đăng ký
                  
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>