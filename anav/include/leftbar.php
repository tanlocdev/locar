<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <nav class="ts-sidebar" style="background-color:	rgb(176,196,222);">
		<ul class="ts-sidebar-menu">

			<li class="ts-label" style="font-size: 17px;">ADMIN</li>
			<li class="<?php if($page=='dashboard'){echo 'active';}?>"><a href="dashboard.php"><i class="fa fa-dashboard fa-lg"></i> <b>Dashboard</b></a></li>

			<li class="active"><a href="manage-brands.php"><i class="fa fa-files-o fa-lg"></i> <b>Hãng xe</b></a>
				<ul>
					<li><a href="create-brand.php"><b>Thêm Hãng xe</b></a></li>
					<li><a href="manage-brands.php"><b>Quản lý Hãng xe</b></a></li>
				</ul>
			</li>

			<li><a href="manage-vehicles.php"><i class="fa fa-car fa-lg"></i> <b>Xe</b></a>
				<ul>
					<li><a href="post-avehical.php"><b>Tạo Xe</b></a></li>
					<li><a href="manage-vehicles.php"><b>Quản lý xe</b></a></li>
				</ul>
			</li>
			<li><a href="manage-bookings.php"><i class="fa fa-calendar-o fa-lg"></i> <b>Quản lý Đặt xe</b></a></li>

			<li><a href="testimonials.php"><i class="fa fa-table fa-lg"></i> <b>Quản lý Phản hồi</b></a></li>
			<li><a href="manage-conactusquery.php"><i class="fa fa-desktop fa-lg"></i> <b>Quản lý trang liên hệ</b></a></li>
			<li><a href="reg-users.php"><i class="fa fa-user fa-lg"></i> <b>Quản lý Người dùng</b></a></li>
			<li><a href="manage-pages.php"><i class="fa fa-cogs fa-lg"></i> <b>Quản lý Trang</b></a></li>
			<li><a href="update-contactinfo.php"><i class="fa fa-phone fa-lg"></i> <b>Cập nhật Thông tin Liên hệ</b></a></li>

			<li><a href="manage-subscribers.php"><i class="fa fa-table fa-lg"></i> <b>Quản lý ĐK nhận thông tin</b> </a></li>

		</ul>
		
	</nav>

   <!-- Bootstrap core CSS -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PHP Active Link</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($page=='home'){echo 'active';}?>"><a href="/">Home</a></li>
            <li class="<?php if($page=='about'){echo 'active';}?>"><a href="about.php">About</a></li>
            <li class="<?php if($page=='contact'){echo 'active';}?>"><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <hr>


///

<nav class="ts-sidebar" style="background-color:	rgb(176,196,222);">
		<ul class="ts-sidebar-menu">

			<li class="ts-label" style="font-size: 17px;">ADMIN</li>
			<li class="<?php if($page=='dashboard'){echo 'active';}?>"><a href="dashboard.php"><i class="fa fa-dashboard fa-lg"></i> <b>Dashboard</b></a></li>

			<li class="active"><a href="manage-brands.php"><i class="fa fa-files-o fa-lg"></i> <b>Hãng xe</b></a>
				<ul>
					<li><a href="create-brand.php"><b>Thêm Hãng xe</b></a></li>
					<li><a href="manage-brands.php"><b>Quản lý Hãng xe</b></a></li>
				</ul>
			</li>

			<li><a href="manage-vehicles.php"><i class="fa fa-car fa-lg"></i> <b>Xe</b></a>
				<ul>
					<li><a href="post-avehical.php"><b>Tạo Xe</b></a></li>
					<li><a href="manage-vehicles.php"><b>Quản lý xe</b></a></li>
				</ul>
			</li>
			<li><a href="manage-bookings.php"><i class="fa fa-calendar-o fa-lg"></i> <b>Quản lý Đặt xe</b></a></li>

			<li><a href="testimonials.php"><i class="fa fa-table fa-lg"></i> <b>Quản lý Phản hồi</b></a></li>
			<li><a href="manage-conactusquery.php"><i class="fa fa-desktop fa-lg"></i> <b>Quản lý trang liên hệ</b></a></li>
			<li><a href="reg-users.php"><i class="fa fa-user fa-lg"></i> <b>Quản lý Người dùng</b></a></li>
			<li><a href="manage-pages.php"><i class="fa fa-cogs fa-lg"></i> <b>Quản lý Trang</b></a></li>
			<li><a href="update-contactinfo.php"><i class="fa fa-phone fa-lg"></i> <b>Cập nhật Thông tin Liên hệ</b></a></li>

			<li><a href="manage-subscribers.php"><i class="fa fa-table fa-lg"></i> <b>Quản lý ĐK nhận thông tin</b> </a></li>

		</ul>
		
	</nav>
	//
	<ul class="nav navbar-nav">
            <li class="<?php if($page=='home'){echo 'active';}?>"><a href="/">Home</a></li>
            <li class="<?php if($page=='about'){echo 'active';}?>"><a href="about.php">About</a></li>
            <li class="<?php if($page=='contact'){echo 'active';}?>"><a href="contact.php">Contact</a></li>
          </ul>