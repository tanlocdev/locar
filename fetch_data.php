<?php

//fetch_data.php

include('includes/config.php');

if(isset($_POST["action"]))
{
	$query = "
	SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
 
	
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "
		 AND PricePerDay BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'
		";
	}


	$statement = $dbh->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:450px;">
					<img src="admin/img/vehicleimages/' . $row["Vimage1"] . '" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">'. $row['VehiclesTitle'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" >'. $row['PricePerDay'] .'</h4>
					<p>Camera : '. $row['ModelYear'].' MP<br />
					Brand : '. $row['BrandName'] .' <br />
					RAM : '. $row['FuelType'] .' GB<br />
					Storage : '. $row['SeatingCapacity'] .' GB </p>
				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>