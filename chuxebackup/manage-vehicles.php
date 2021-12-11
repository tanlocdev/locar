<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{

if(isset($_REQUEST['del']))
	{
$delid=intval($_GET['del']);
$sql = "delete from tblvehicles SET id=:status WHERE  id=:delid";
$query = $dbh->prepare($sql);
$query -> bindParam(':delid',$delid, PDO::PARAM_STR);
$query -> execute();
$msg="Vehicle  record deleted successfully";
}


 ?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Locars |Admin Quản lý xe</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">

	<link rel="shortcut icon" href="../assets/images/logo.jpg">
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
<?php include 'include/header.php'; ?> 

	<div class="ts-main-content">
		<?php $page = 'manage-vehicles'; include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title text-center">QUẢN LÝ XE</h2>

						<div class="container-fluid">
								<div class="" style="float: right; ">

									<a href="post-avehical.php" class="btn btn-primary" name="submit" type="submit">&ensp;&ensp; THÊM XE  + &ensp;&ensp;</a>
								</div>
							</div>
							<br>

						<!-- Zero Configuration Table -->
						<div class="panel panel-primary">
							<div class="panel-heading">Danh sách xe</div>
							<div class="panel-body table-responsive">
							<?php if($error){?><div class="errorWrap"><strong>LỖI</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>THÀNH CÔNG</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>STT</th>
											<th>Tên xe</th>
											<th>Hãng xe </th>
											<th>Giá thuê</th>
											<th>Loại nhiên liệu</th>
											<th>Đời xe</th>
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>STT</th>
										<th>Tên xe</th>
											<th>Hãng xe </th>
											<th>Giá thuê</th>
											<th>Loại nhiên liệu</th>
											<th>Đời xe</th>
											<th>Action</th>
										</tr>
										</tr>
									</tfoot>
									<tbody>

<?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->VehiclesTitle);?></td>
											<td><?php echo htmlentities($result->BrandName);?></td>
											<td><?php echo htmlentities($result->PricePerDay);?></td>
											<td><?php echo htmlentities($result->FuelType);?></td>
												<td><?php echo htmlentities($result->ModelYear);?></td>
		<td><a href="edit-vehicle.php?id=<?php echo $result->id;?>"><i class="fa fa-edit fa-2x"></i></a>&ensp;&ensp;&ensp;&ensp;
<a href="manage-vehicles.php?del=<?php echo $result->id;?>" onclick="return confirm('Bạn thật sự muốn XÓA xe này!');"><i class="fa fa-close fa-2x" style="color: red;"></i></a></td>
										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
									</tbody>
								</table>

						

							</div>
						</div>

					

					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="container-fluid text-center">
			<button class="btn btn-md" class="fa fa-arrow-left" onclick="goBack()"> &ensp; Trở về &ensp;</button>
			<p>
		</div>

		<script>
			function goBack() {
				window.history.back();
			}
		</script>

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
<?php } ?>
