<!DOCTYPE html>
<html>
<head>
 <title>Thêm khoanh vùng</title>
 <script src="js/jquery.min.js"></script>
 <link rel="stylesheet" href="css/leaflet.css" />
 <script src="js/leaflet.js"></script>
</head>
<body>
 <div id="map" style="width: 100%; height: 700px"></div><br />
 <input type="button" onclick="drawArea();" value="VẼ MỘT KHOANH VÙNG" /> &ensp; <input type="button" onclick="resetArea();" value="Xóa, làm lại" /><br />
 <p>Để thêm một điểm khoanh vùng, hãy nhấp vào bản đồ. Để xóa một điểm khoanh vùng, hãy nhấp lại vào điểm đó.</p>
 <form action="addareadb.php" method="post">
  <h1>Thêm khoanh vùng</h1>
  <table cellpadding="5" cellspacing="0" border="0">
   <tbody>
    <tr align="left" valign="top">
     <td align="left" valign="top">Tên vùng:</td>
     <td align="left" valign="top"><input type="text" name="area" /></td>
    </tr>
    <tr align="left" valign="top">
     <td align="left" valign="top">Vị trí tọa độ vùng</td>
     <td align="left" valign="top"><textarea id="geo" name="geo"></textarea>
            <br /><input type="button" onclick="getGeoPoints();" value="Lấy tọa độ từ các điểm" /></td>
    </tr>
	<tr align="left" valign="top">
	  <td align="left" valign="top">Ghi chú</td>
	  <td align="left" valign="top"><textarea name="keywords"></textarea></td>
	</tr>
    <tr align="left" valign="top">
     <td align="left" valign="top"></td>
     <td align="left" valign="top"><input class="form-control" type="submit" value=" Lưu lại "></td>
    </tr>
   </tbody>
  </table>
 </form>
 <script>
  var map = L.map('map').setView([9.758963, 105.601753], 13);
  var polygon;
  var draggableAreaMarkers = new Array();

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


  
  function resetArea() {
   if(polygon != null) {
    map.removeLayer( polygon );
   }
   for(i=0; i < draggableAreaMarkers.length; i++) {
    map.removeLayer( draggableAreaMarkers[i] );
   }
   draggableAreaMarkers = new Array();
  }
  
  function addMarkerAreaPoint(latLng) {
   var areaMarker = L.marker( [latLng.lat, latLng.lng], { draggable: true, zIndexOffset: 900 }).addTo(map);
   
   areaMarker.arrayId = draggableAreaMarkers.length;

   areaMarker.on('click', function() {
    map.removeLayer( draggableAreaMarkers[ this.arrayId ]);
    draggableAreaMarkers[ this.arrayId ] = "";
   });

   draggableAreaMarkers.push( areaMarker );
  }
  
  function drawArea() {
   if(polygon != null) {
    map.removeLayer( polygon );
   }

   var latLngAreas = new Array();

   for(i=0; i < draggableAreaMarkers.length; i++) {
    if(draggableAreaMarkers[ i ]!="") {
     latLngAreas.push( L.latLng( draggableAreaMarkers[ i ].getLatLng().lat, draggableAreaMarkers[ i ].getLatLng().lng));
    }
   }

   if(latLngAreas.length > 1) {
    // create a blue polygon from an array of LatLng points
    polygon = L.polygon( latLngAreas, {color: 'blue'}).addTo(map);
   }

   if(polygon != null) {
    // zoom the map to the polygon
    map.fitBounds( polygon.getBounds() );
   }
  }
  
  function getGeoPoints() {
   var points = new Array();
   for(var i=0; i < draggableAreaMarkers.length; i++) {
    if(draggableAreaMarkers[i] != "") {
     points[i] =  draggableAreaMarkers[ i ].getLatLng().lng + "," + draggableAreaMarkers[ i ].getLatLng().lat;
    }
   }
   $('#geo').val(points.join(','));
  }
  
  $( document ).ready(function() {
   map.on('click', function(e) {
    addMarkerAreaPoint( e.latlng);
   });
  });
 </script>
</body>
</html>