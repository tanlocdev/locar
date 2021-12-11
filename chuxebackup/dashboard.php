<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
?>

<?php $page = 'dashboard';?>
	<!doctype html>
	<html lang="en" class="no-js">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="theme-color" content="#3e454c">

		<title>Locars | Admin</title>

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

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>

	<body>
		<?php include('includes/header.php'); ?>
		<div class="ts-main-content">
			<?php $page = 'dashboard'; include('includes/leftbar.php'); ?>
			<div class="content-wrapper">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-12">
							<p></p>

							<h2 class="page-title text-center -5">THỐNG KÊ</h2>

							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-3">
											<div class="card text-white bg-primary mb-3">
												<div class="card-body pb-5">
													<div class="stat-panel text-center">
														<?php
														$sql = "SELECT id from tblusers ";
														$query = $dbh->prepare($sql);
														$query->execute();
														$results = $query->fetchAll(PDO::FETCH_OBJ);
														$regusers = $query->rowCount();
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($regusers); ?></div>
														<div class="text-value">NGƯỜI DÙNG ĐĂNG KÝ</div>
														
													</div>
												</div>
												<a href="reg-users.php" class="block-anchor panel-footer text-center">XEM CHI TIẾT <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="col-md-3">
											<div class="card text-white bg-success mb-3">
												<div class="card-body pb-5">
													<div class="stat-panel text-center">
														<?php
														$sql1 = "SELECT id from tblvehicles ";
														$query1 = $dbh->prepare($sql1);;
														$query1->execute();
														$results1 = $query1->fetchAll(PDO::FETCH_OBJ);
														$totalvehicle = $query1->rowCount();
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($totalvehicle); ?></div>
														<div class="stat-panel-title text-uppercase">Danh sách xe</div>
													</div>
												</div>
												<a href="manage-vehicles.php" class="block-anchor panel-footer text-center">XEM CHI TIẾT &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
										
										<div class="col-md-3">
										<div class="card text-white bg-warning mb-3">
												<div class="card-body pb-5">
													<div class="stat-panel text-center">
														<?php
														$sql3 = "SELECT id from tblbrands ";
														$query3 = $dbh->prepare($sql3);
														$query3->execute();
														$results3 = $query3->fetchAll(PDO::FETCH_OBJ);
														$brands = $query3->rowCount();
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($brands); ?></div>
														<div class="stat-panel-title text-uppercase">Loại xe</div>
													</div>
												</div>
												<a href="manage-brands.php" class="block-anchor panel-footer text-center">XEM CHI TIẾT &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

										<div class="col-md-3">
										<div class="card text-white bg-danger mb-3">
												<div class="card-body pb-5">
													<div class="stat-panel text-center">
														<?php
														$sql2 = "SELECT id from tblbooking ";
														$query2 = $dbh->prepare($sql2);
														$query2->execute();
														$results2 = $query2->fetchAll(PDO::FETCH_OBJ);
														$bookings = $query2->rowCount();
														?>

														<div class="stat-panel-number h1 "><?php echo htmlentities($bookings); ?></div>
														<div class="stat-panel-title text-uppercase">Tổng số Hợp đồng</div>
													</div>
												</div>
												<a href="manage-bookings.php" class="block-anchor panel-footer text-center">XEM CHI TIẾT &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-12">


							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-3">
										<div class="card text-white bg-secondary mb-3">
												<div class="card-body pb-5">
													<div class="stat-panel text-center">
														<?php
														$sql4 = "SELECT id from tblsubscribers ";
														$query4 = $dbh->prepare($sql4);
														$query4->execute();
														$results4 = $query4->fetchAll(PDO::FETCH_OBJ);
														$subscribers = $query4->rowCount();
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($subscribers); ?></div>
														<div class="stat-panel-title text-uppercase">GÓP Ý</div>
													</div>
												</div>
												<a href="manage-subscribers.php" class="block-anchor panel-footer text-center">XEM CHI TIẾT <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="col-md-3">
										<div class="card text-white bg-info mb-3">
												<div class="card-body pb-5">
													<div class="stat-panel text-center">
														<?php
														$sql6 = "SELECT id from tblcontactusquery ";
														$query6 = $dbh->prepare($sql6);;
														$query6->execute();
														$results6 = $query6->fetchAll(PDO::FETCH_OBJ);
														$query = $query6->rowCount();
														?>
														<div class="stat-panel-number h1 "><?php echo htmlentities($query); ?></div>
														<div class="stat-panel-title text-uppercase">Liên hệ</div>
													</div>
												</div>
												<a href="manage-conactusquery.php" class="block-anchor panel-footer text-center">XEM CHI TIẾT &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>
										<div class="col-md-3">
											<div class="panel panel-primary">
												<div class="panel-body bk-info text-light">
													<div class="stat-panel text-center">
														<?php
														$sql5 = "SELECT id from tbltestimonial ";
														$query5 = $dbh->prepare($sql5);
														$query5->execute();
														$results5 = $query5->fetchAll(PDO::FETCH_OBJ);
														$testimonials = $query5->rowCount();
														?>

														<div class="stat-panel-number h1 "><?php echo htmlentities($testimonials); ?></div>
														<div class="stat-panel-title text-uppercase">Testimonials</div>
													</div>
												</div>
												<a href="testimonials.php" class="block-anchor panel-footer text-center">XEM CHI TIẾT &nbsp; <i class="fa fa-arrow-right"></i></a>
											</div>
										</div>

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

		<script>
			window.onload = function() {

				// Line chart from swirlData for dashReport
				var ctx = document.getElementById("dashReport").getContext("2d");
				window.myLine = new Chart(ctx).Line(swirlData, {
					responsive: true,
					scaleShowVerticalLines: false,
					scaleBeginAtZero: true,
					multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
				});

				// Pie Chart from doughutData
				var doctx = document.getElementById("chart-area3").getContext("2d");
				window.myDoughnut = new Chart(doctx).Pie(doughnutData, {
					responsive: true
				});

				// Dougnut Chart from doughnutData
				var doctx = document.getElementById("chart-area4").getContext("2d");
				window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {
					responsive: true
				});

			}
		</script>
	</body>

	</html>
<?php } ?>