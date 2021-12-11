<?php
$connect = mysqli_connect("localhost", "root", "", "webthuexe");
$output = '';
if (isset($_POST["query"])) {
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 
	from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand
	WHERE tblvehicles.VehiclesTitle LIKE '%" . $search . "%'
	OR tblbrands.BrandName LIKE '%" . $search . "%' 
	OR tblvehicles.PricePerDay LIKE '%" . $search . "%' 
	OR tblvehicles.FuelType LIKE '%" . $search . "%' 
	OR VehiclesOverview LIKE '%" . $search . "%'
	
	";
	// SELECT * FROM tbl_customer 
	// WHERE CustomerName LIKE '%".$search."%'
	// OR Address LIKE '%".$search."%' 
	// OR City LIKE '%".$search."%' 
	// OR PostalCode LIKE '%".$search."%' 
	// OR Country LIKE '%".$search."%'

} else {
	$query = "
	SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";

	// SELECT * FROM tbl_customer ORDER BY CustomerID";
}
$result = mysqli_query($connect, $query);
if (mysqli_num_rows($result) > 0) {
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Customer Name</th>
							<th>Address</th>
							<th>City</th>
							<th>Postal Code</th>
							<th>Country</th>
						</tr>';
	while ($row = mysqli_fetch_array($result)) {
		$output .= '

		

              <div class="col-list-3">
					<div class="recent-car-list">
						<div class="car-info-box"> <a href="../vehical-details.php?vhid=' . $row["id"] . '"><img src="../admin/img/vehicleimages/' . $row["Vimage1"] . '" class="img-responsive" alt="image"></a>
						<ul>
							<li><i class="fa fa-car fa-lg" aria-hidden="true"></i>' . $row["FuelType"] . '</li>
							<li><i class="fa fa-calendar fa-lg" aria-hidden="true"></i>Mẫu ' . $row["ModelYear"] . '</li>
							<li><i class="fa fa-user fa-lg" aria-hidden="true"></i>' . $row["SeatingCapacity"] . ' Chỗ</li>
						</ul>
						</div>
						<div class="car-title-m">
						<h6><a href="../vehical-details.php?vhid=' . $row["id"] . '">' . $row["BrandName"] . ', ' . $row["VehiclesTitle"] . '</a></h6> <br>
						<span class="price" style="color: steelblue; float:right; padding:15px;">'.number_format( $row["PricePerDay"], 0, ".", ".") . ' VND' . ' / Ngày</span>
					
						</div>
							<div class="inventory_info_m">
							<p>' . $row["VehiclesOverview"] . '</p>
							</div>
						</div>
						</div>
					

					</div>
		  	   



			<tr>
				<td>' . $row["VehiclesTitle"] . '</td>
				<td>' . $row["BrandName"] . '</td>
				<td>' . $row["ModelYear"] . '</td>
				<td>' . $row["PricePerDay"] . '</td>
				<td>' . $row["FuelType"] . '</td>
			</tr>
		';
	}
	echo $output;
} else {
	echo 'Data Not Found';
}
