
<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password FROM chuxe WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script>alert('Đã đăng nhập Admin thành công.');</script>";
echo "<script type='text/javascript'> document.location = 'forgotpassword.php'; </script>";
} else{

  echo "<script>alert('Invalid Details');</script>";

}

}

?>

<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title text-center"><b>ĐĂNG NHẬP</b></h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Mật khẩu*">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
               
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Đăng nhập" class="btn btn-block">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>