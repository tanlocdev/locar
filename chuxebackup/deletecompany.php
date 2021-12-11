<?php
 require_once("db.php");
 $arr = $conn->getCompaniesList();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Xóa xe trên bản đồ</title>
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/leaflet.css" />
  <script src="js/leaflet.js"></script>
 </head>
 <body>
  <div id="map" style="width: 1000px; height: 400px"></div>
  <form action="deletecompanydb.php" method="POST">
   <h1>Xóa xe</h1>
   <table cellpadding="5" cellspacing="0" border="0">
    <tbody>
     <tr align="left" valign="top">
      <td align="left" valign="top">Tên xe</td>
      <td align="left" valign="top"><select id="company" name="company"><option value="0">Chọn xe cần xóa</option><?php for( $i=0; $i < count($arr); $i++) { print '<option value="'.$arr[$i]['id'].'">'.$arr[$i]['company'].'</option>'; } ?></select></td>
     </tr>
     <tr align="left" valign="top">
      <td align="left" valign="top"></td>
      <td align="left" valign="top"><input type="submit" value="Xóa"></td>
     </tr>
    </tbody>
   </table>
  </form>
  <script>
   var map = L.map('map').setView([51.505, -0.09], 13);

   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

   
   
   function putDraggable() {
    /* create a draggable marker in the center of the map */
    draggableMarker = L.marker([ map.getCenter().lat, map.getCenter().lng], {draggable: true, zIndexOffset: 900}).addTo(map);
    
    /* collect Lat,Lng values */
    draggableMarker.on('dragend', function(e) {
     $("#lat").val(this.getLatLng().lat);
     $("#lng").val(this.getLatLng().lng);
    });
   }
   
   $( document ).ready(function() {
    putDraggable();
    
    $("#company").change(function() {
     for(var i=0; i <arr.length; i++) {
      if(arr[i]['id'] == $('#company').val()) {
       map.panTo([arr[i]['latitude'], arr[i]['longitude']]);
       draggableMarker.setLatLng([arr[i]['latitude'], arr[i]['longitude']]);
       break;
      }
     }
    });
  
   });
   
   var arr = JSON.parse( '<?php echo json_encode($arr) ?>' );
  </script>
 </body>
</html>