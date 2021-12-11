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

	while ($row = mysqli_fetch_array($result)) {
		$output .= '

	
					
					</div>
						<div class="product-listing-m gray-bg">
						  <div class="product-listing-img"><img src="admin/img/vehicleimages/' . $row["Vimage1"] . '" class="img-responsive" alt="Image" /> </a>
						  </div>
						  <div class="product-listing-content">
							<h5><a href="vehical-details.php?vhid=' . $row["id"] . '">' . $row["BrandName"] . ', ' . $row["VehiclesTitle"] . '</a></h5>
							<p class="list-price">' . number_format($row["PricePerDay"], 0, ".", ".") . ' VND' . ' / Ngày</p>
							<ul>
							  <li><i class="fa fa-user fa-2x" aria-hidden="true"></i>' . $row["SeatingCapacity"] . ' Chỗ</li>
							  <li><i class="fa fa-calendar fa-2x" aria-hidden="true"></i>' . $row["ModelYear"] . ' Mẫu</li>
							  <li><i class="fa fa-car fa-2x" aria-hidden="true"></i>' . $row["FuelType"] . '</li>
							</ul>
							<a href="vehical-details.php?vhid=' . $row["id"] . ' " class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
						  </div>
						</div>
				
		  	   



			
		';
	}
	echo $output;
} else {
	echo 'Data Not Found';
}
