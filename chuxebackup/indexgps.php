<?php
 require_once("db.php");
 $companies = $conn->getCompaniesList();
 $streets = $conn->getStreetsList();
 $areas = $conn->getAreasList();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Index Quản lý GPS</title>
 <script src="js/jquery.min.js"></script>
 <link rel="stylesheet" href="css/leaflet.css" />
 <script src="js/leaflet.js"></script>
</head>
<body>


 <div id="map" style="width: 100%; height: 700px"></div>
 
 <br>
<p>
 <input  style="width: 800px; height: 30px;" type="text" name="search" id="search" /> <input style="width: 100px; height: 30px;" class="btn btn-primary" type="button" id="searchBtn" value="Tìm kiếm" />
 <br> <p></p>
 <a href="addarea.php">Thêm vùng</a> &ensp;
 <a href="addcompany.php">Thêm xe</a>

 <p></p>
 

 <table class="table">
  <thead>
    <tr>
      
      <th scope="col">KẾT QUẢ TÌM KIẾM</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      
      <td id="searchresult"></td>
      
      
    </tr>
   
  </tbody>
</table>


 <div id="searchresult"></div>


 <script>

  var map = L.map('map').setView([9.758963, 105.601753], 13);

  

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


  
  $( document ).ready(function() {
	$('#searchBtn').click(function() {
	  $.ajax({
		type: "GET",
		url: "ajax.php?keyword="+$("#search").val()
	  }).done(function( data )
	  {
		var jsonData = JSON.parse(data);
		var jsonLength = jsonData.results.length;
		var html = "<ul>";
		for (var i = 0; i < jsonLength; i++) {
		  var result = jsonData.results[i];
		  html += '<li data-lat="' + result.latitude + '" data-lng="' + result.longitude + '" class="searchResultElement">' + result.name + '</li>';
		}
		html += '</ul>';
		$('#searchresult').html(html);  		
		$( 'li.searchResultElement' ).click( function() {
		  var lat = $(this).attr( "data-lat" );
		  var lng = $(this).attr( "data-lng" );
		  map.panTo( [lat,lng] );
		});
	  });
	});
   addCompanies();   
   addStreets();   
   addAreas();   
  });
  
  function addCompanies() {
   for(var i=0; i<companies.length; i++) {
    var marker = L.marker( [companies[i]['latitude'], companies[i]['longitude']]).addTo(map);
    marker.bindPopup( "<b>" + companies[i]['company']+"</b><br>Mô tả:" + companies[i]['details'] + "<br />Số điện thoại: " + companies[i]['telephone']);
   }
  }
  
  function stringToGeoPoints( geo ) {
   var linesPin = geo.split(",");

   var linesLat = new Array();
   var linesLng = new Array();

   for(i=0; i < linesPin.length; i++) {
    if(i % 2) {
     linesLat.push(linesPin[i]);
    }else{
     linesLng.push(linesPin[i]);
    }
   }

   var latLngLine = new Array();

   for(i=0; i<linesLng.length;i++) {
    latLngLine.push( L.latLng( linesLat[i], linesLng[i]));
   }
   
   return latLngLine;
  }
  
  function addAreas() {
   for(var i=0; i < areas.length; i++) {
	   console.log(areas[i]['geolocations']);
    var polygon = L.polygon( stringToGeoPoints(areas[i]['geolocations']), { color: 'blue'}).addTo(map);
    polygon.bindPopup( "<b> Khoanh vùng của: " + areas[i]['name']);   
   }
  }
  
  function addStreets() {
   for(var i=0; i < streets.length; i++) {
    var polyline = L.polyline( stringToGeoPoints(streets[i]['geolocations']), { color: 'red'}).addTo(map);
    polyline.bindPopup( "<b> Đường đi của: "  + streets[i]['name']);   
   }
  }
  
  var companies = JSON.parse( '<?php echo json_encode($companies) ?>' );
  var streets = JSON.parse( '<?php echo json_encode($streets) ?>' );
  var areas = JSON.parse( '<?php echo json_encode($areas) ?>' );
 </script>
</body>
</html>