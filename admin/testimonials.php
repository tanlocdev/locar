<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_REQUEST['eid'])) {
		$eid = intval($_GET['eid']);
		$status = "0";
		$sql = "UPDATE tbltestimonial SET status=:status WHERE  id=:eid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':eid', $eid, PDO::PARAM_STR);
		$query->execute();

		$msg = " Ẩn phản hồi thành công";
	}


	if (isset($_REQUEST['aeid'])) {
		$aeid = intval($_GET['aeid']);
		$status = 1;

		$sql = "UPDATE tbltestimonial SET status=:status WHERE  id=:aeid";
		$query = $dbh->prepare($sql);
		$query->bindParam(':status', $status, PDO::PARAM_STR);
		$query->bindParam(':aeid', $aeid, PDO::PARAM_STR);
		$query->execute();

		$msg = " Duyệt phản hồi thành công";
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

		<title>Locars - Website cho thuê xe </title>

		<link rel="shortcut icon" href="../assets/images/logo.jpg">

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
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}
		</style>

	</head>

	<body>
		<?php include('includes/header.php'); ?>

		<div class="ts-main-content">
			<?php include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">

							<h2 class="page-title" style="text-align: center;">QUẢN LÝ PHẢN HỒI</h2>

							<!-- Zero Configuration Table -->
							<div class="panel panel-primary">
								<div class="panel-heading">Phản hồi của người dùng</div>
								<div class="panel-body">
									<?php if ($error) { ?><div class="errorWrap"><strong>LỖI</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>THÀNH CÔNG</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
									<table id="zctb" class="display table  table-bordered table-hover" cellspacing="0" width="100%">
										<thead>
											<tr>
												<th>STT</th>
												<th>Tên</th>
												<th>Tài khoản-Email</th>
												<th>Nội dung phản hồi</th>
												<th>Ngày gửi</th>
												<th>Hành động</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>STT</th>
												<th>Tên</th>
												<th>Tài khoản-Email</th>
												<th>Nội dung phản hồi</th>
												<th>Ngày gửi</th>
												<th>Hành động</th>
											</tr>
										</tfoot>
										<tbody>

											<?php $sql = "SELECT tblusers.FullName,tbltestimonial.UserEmail,tbltestimonial.Testimonial,tbltestimonial.PostingDate,tbltestimonial.status,tbltestimonial.id from tbltestimonial join tblusers on tblusers.Emailid=tbltestimonial.UserEmail";
											$query = $dbh->prepare($sql);
											$query->execute();
											$results = $query->fetchAll(PDO::FETCH_OBJ);
											$cnt = 1;
											if ($query->rowCount() > 0) {
												foreach ($results as $result) {				?>
													<tr>
														<td><?php echo htmlentities($cnt); ?></td>
														<td><?php echo htmlentities($result->FullName); ?></td>
														<td><?php echo htmlentities($result->UserEmail); ?></td>
														<td><?php echo htmlentities($result->Testimonial); ?></td>
														<td><?php echo htmlentities($result->PostingDate); ?></td>
														<td><?php if ($result->status == "" || $result->status == 0) {
															?><a class="btn btn-success" href="testimonials.php?aeid=<?php echo htmlentities($result->id); ?>" onclick="return confirm('Bạn thật sự muốn Duyệt phản hồi này!')"> Duyệt</a>
															<?php } else { ?>

																<a class="btn btn-danger" href="testimonials.php?eid=<?php echo htmlentities($result->id); ?>" onclick="return confirm('Bạn thật sự muốn Ẩn phản hồi này')"> Ẩn</a>
														</td>
													<?php } ?></td>
													</tr>
											<?php $cnt = $cnt + 1;
												}
											} ?>

										</tbody>
									</table>



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
<?php } ?>