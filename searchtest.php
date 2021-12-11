<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <title>Locars - Website cho thuê xe</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/images/logo.jpg">
    <style>
        body {
            font-family: arial;
        }

        .container {
            width: 1200px;
            margin: #0000;
           
        }

        h1 {
            text-align: center;
        }

      

        .product-item p {
            margin: 0;
            line-height: 26px;
            max-height: 52px;
            overflow: hidden;
        }

        .searchbar {
            width: 300px;

        }

        .product-price {
            color: red;
            font-weight: bold;
        }

        .product-img {
            padding: 5px;
            border: 1px solid #ccc;
            margin-bottom: 5px;
        }

        .product-item img {
            max-width: 100%;
        }

        .product-item ul {
            margin: 0;
            padding: 0;
            border-right: 1px solid #ccc;
        }

        

        .clear-both {
            clear: both;
        }

        a {
            text-decoration: none;
        }

        

        #pagination {
            text-align: right;
            margin-top: 15px;
        }

        .page-item {
            border: 1px solid #ccc;
            padding: 5px 9px;
            color: #000;
        }

        .current-page {
            background: #000;
            color: #FFF;
        }

        #wrapper-product {
            border: 1px solid #ccc;
        }

        #product-search {

            margin: 0 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ccc;
            float: left;
        }

        #sort-box {
            float: right;
            margin-right: 45px;
            line-height: 24px;
            height: 24px;
        }
    </style>
</head>

<body>
    <?php
    $param = "";
    $sortParam = "";
    $orderConditon = "";
    //Tìm kiếm
    $search = isset($_GET['VehiclesTitle']) ? $_GET['VehiclesTitle'] : "";
    if ($search) {
        $where = "WHERE `VehiclesTitle` LIKE '%" . $search . "%'";
        $param .= "VehiclesTitle=" . $search . "&";
        $sortParam =  "VehiclesTitle=" . $search . "&";
    }

    //Sắp xếp
    $orderField = isset($_GET['field']) ? $_GET['field'] : "";
    $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
    if (
        !empty($orderField)
        && !empty($orderSort)
    ) {
        $orderConditon = "ORDER BY `tblvehicles`.`" . $orderField . "` " . $orderSort;
        $param .= "field=" . $orderField . "&sort=" . $orderSort . "&";
    }

    include_once(__DIR__ . '/dbconnect.php');
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 8;
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1; //Trang hiện tại
    $offset = ($current_page - 1) * $item_per_page;
    if ($search) {
        $products = mysqli_query($conn, "SELECT * FROM `tblbrands` WHERE `BrandName` LIKE '%" . $search . "%' " . $orderConditon . "  LIMIT " . $item_per_page . " OFFSET " . $offset);
        $products = mysqli_query($conn, "SELECT * FROM `tblvehicles` WHERE `VehiclesTitle` LIKE '%" . $search . "%' " . $orderConditon . "  LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($conn, "SELECT * FROM `tblvehicles` WHERE `VehiclesTitle` LIKE '%" . $search . "%'");
    } else {
        $products = mysqli_query($conn, "SELECT * FROM `tblvehicles` " . $orderConditon . " LIMIT " . $item_per_page . " OFFSET " . $offset);
        $totalRecords = mysqli_query($conn, "SELECT * FROM `tblvehicles`");
    }
    $totalRecords = $totalRecords->num_rows;
    $totalPages = ceil($totalRecords / $item_per_page);
    ?>

    <!--  <div class="product-items"> -->

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="wrapper-product" >
                    <h1>Danh sách sản phẩm</h1>
                    <div id="filter-box">
                        <form id="product-search" method="GET">
                            <label>Tìm kiếm sản phẩm</label>
                            <input class="searchbar" type="search" value="<?= isset($_GET['VehiclesTitle']) ? $_GET['VehiclesTitle'] : "" ?>" name="VehiclesTitle" />
                            <input type="submit" value="Tìm kiếm" />
                        </form>
                        <select id="sort-box" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                            <option value="">Sắp xếp giá</option>
                            <option <?php if (isset($_GET['sort']) && $_GET['sort'] == "desc") { ?> selected <?php } ?> value="?<?= $sortParam ?>field=PricePerDay&sort=desc">Cao đến thấp</option>
                            <option <?php if (isset($_GET['sort']) && $_GET['sort'] == "asc") { ?> selected <?php } ?> value="?<?= $sortParam ?>field=PricePerDay&sort=asc">Thấp đến cao</option>
                        </select>
                        <div style="clear: both;"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="result-sorting-wrapper">
                    <div class="sorting-count">

                        <?php
                        while ($row = mysqli_fetch_array($products)) {
                        ?>

                            <div class="product-listing-m gray-bg">
                                <div class="product-listing-img">

                                    <a href="vehical-details.php?vhid=<?= $row['id'] ?>">
                                        <img class="img-responsive" src="admin/img/vehicleimages/<?= $row['Vimage1'] ?>" />
                                    </a>
                                </div>
                                <div class="product-listing-content">
                                    <h5><a href="vehical-details.php?=<?= $row['id'] ?>"><?= $row['VehiclesBrand'] ?> <?= $row['VehiclesTitle'] ?></a></h5>

                                    <p class="list-price"><?= number_format($row['PricePerDay'], 0, ",", ".") ?> vnđ / Ngày</p><br />
                                    <ul>
                                        <li><i class="fa fa-user" aria-hidden="true"></i><?= $row['SeatingCapacity'] ?> Chỗ</li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i><?= $row['ModelYear'] ?> Mẫu</li>
                                        <li><i class="fa fa-car" aria-hidden="true"></i><?= $row['FuelType'] ?></li>
                                    </ul>
                                    <p><?= $row['VehiclesOverview'] ?></p>
                                    <div class="buy-button">
                                        <a class="btn" href="vehical-details.php?vhid=<?= $row['id'] ?>">Xem chi tiết </a>

                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>


                </section>
            </div>
        </div>
    </div>
    <div class="clear-both"></div>


    </div>
    </div>
</body>

</html>