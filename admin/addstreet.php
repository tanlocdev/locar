<!DOCTYPE html>
<html>
 <head>
  <title>Thêm đường đi</title>
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/leaflet.css" />
  <script src="js/leaflet.js"></script>
 </head>
 <body>
  <div id="map" style="width: 1200px; height: 400px"></div><br />
  <input type="button" onclick="drawStreet();" value="VẼ ĐƯỜNG ĐI" />&ensp; <input type="button" onclick="resetStreet();" value="Xóa, làm lại" /><br />
  <p>Để thêm một điểm của đường đi, hãy nhấp vào bản đồ. Để xóa một điểm trên đường đi, hãy nhấp lại vào điểm đó.</p>
  <form action="addstreetdb.php" method="post">
   <h1>Thêm đường đi</h1>
   <table cellpadding="5" cellspacing="0" border="0">
    <tbody>
     <tr align="left" valign="top">
      <td align="left" valign="top">Tên đường đi</td>
      <td align="left" valign="top"><input type="text" name="street" /></td>
     </tr>
     <tr align="left" valign="top">
      <td align="left" valign="top">Tọa độ địa lý</td>
      <td align="left" valign="top">
       <textarea id="geo" name="geo"></textarea>
       <br /><input type="button" onclick="getGeoPoints();" value="Lấy tọa độ từ các điểm" />
      </td>
     </tr>
	<tr align="left" valign="top">
	  <td align="left" valign="top">Ghi chú</td>
	  <td align="left" valign="top"><textarea name="keywords"></textarea></td>
	</tr>
     <tr align="left" valign="top">
      <td align="left" valign="top"></td>
      <td align="left" valign="top"><input type="submit" value="Lưu lại"></td>
     </tr>
    </tbody>
   </table>
  </form>
  <script>
   var map = L.map( 'map' ).setView( [51.505, -0.09], 13 );
   var polyLine;
   var draggableStreetMarkers = new Array();

   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


   
   function resetStreet() {
    if(polyLine != null) {
     map.removeLayer( polyLine );
    }
    for(i=0; i< draggableStreetMarkers.length; i++) {
     map.removeLayer( draggableStreetMarkers[i] );
    }
    draggableStreetMarkers = new Array();
   }
   
   function addMarkerStreetPoint( latLng ) {
    var streetMarker = L.marker( [latLng.lat, latLng.lng], { draggable: true, zIndexOffset: 900}).addTo(map);

    streetMarker.arrayId = draggableStreetMarkers.length;

    streetMarker.on('click', function() {
     map.removeLayer( draggableStreetMarkers[ this.arrayId ]);
     draggableStreetMarkers[ this.arrayId ] = "";
    });

    draggableStreetMarkers.push( streetMarker );
   }
   
   function drawStreet() {
    if(polyLine != null) {
     map.removeLayer( polyLine );
    }

    var latLngStreets = new Array();

    for(i=0; i < draggableStreetMarkers.length; i++) {
     if(draggableStreetMarkers[i]!="") {
      latLngStreets.push( L.latLng( draggableStreetMarkers[ i ].getLatLng().lat, draggableStreetMarkers[ i ].getLatLng().lng));
     }
    }

    if(latLngStreets.length > 1) {
     // create a red polyline from an array of LatLng points
     polyLine = L.polyline( latLngStreets, {color: 'red'} ).addTo(map);
    }

    if(polyLine != null) {
     // zoom the map to the polyline
     map.fitBounds( polyLine.getBounds() );
    }
   }
   
   function getGeoPoints() {
    var points = new Array();
    for(var i=0; i < draggableStreetMarkers.length; i++) {
     if(draggableStreetMarkers[i] != "") {
      points[i] =  draggableStreetMarkers[ i ].getLatLng().lng + "," + draggableStreetMarkers[ i ].getLatLng().lat;
     }
    }
    $('#geo').val(points.join(','));
   }
   
   $( document ).ready(function() {
    map.on('click', function(e) {
     addMarkerStreetPoint( e.latlng );
    });
   });
  </script>
 </body>
</html>