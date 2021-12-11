<?php 

//index.php

include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Product filter in php</title>

    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href = "assets/css/jquery-ui.css" rel = "stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
        	<br />
        	<h2 align="center">Advance Ajax Product Filters in PHP</h2>
        	<br />
            <div class="col-md-3">                				
				<div class="list-group">
					<h3>Price</h3>
					<input type="hidden" id="hidden_minimum_price" value="500000" />
                    <input type="hidden" id="hidden_maximum_price" value="3000000" />
                    <p id="price_show">500000 - 3000000</p>
                    <div id="price_range"></div>
                </div>				
             
            </div>

            <div class="col-md-9">
            	<br />
                <div class="row filter_data">

                </div>
            </div>
        </div>

    </div>
<style>
#loading
{
	text-align:center; 
	background: url('loader.gif') no-repeat center; 
	height: 150px;
}
</style>

<script>
$(document).ready(function(){
    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
      
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    $('#price_range').slider({
        range:true,
        min:500000,
        max:3000000,
        values:[500000, 3000000],
        step:50000,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>
</body>
</html>
