<!DOCTYPE html>
<html>
 <head>
  <title>Add a company</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/leaflet.css" />
  <script src="js/leaflet.js"></script>
 </head>
 <body>
  <div id="map" style="width: 100%; height: 700px"></div>
  <form action="addcompanydb.php" method="post">
   <h1>Thêm xe</h1>
   <table cellpadding="5" cellspacing="0" border="0">
    <tbody>
     <tr align="left" valign="top">
      <td align="left" valign="top">Tên xe</td>
      <td align="left" valign="top"><input type="text" name="company" /></td>
     </tr>
     <tr align="left" valign="top">
      <td align="left" valign="top">Mô tả</td>
      <td align="left" valign="top"><textarea name="details"></textarea></td>
     </tr>
     <tr align="left" valign="top">
      <td align="left" valign="top">Vĩ độ</td>
      <td align="left" valign="top"><input id="lat" type="text" name="latitude" /></td>
     </tr>
     <tr align="left" valign="top">
      <td align="left" valign="top">Kinh độ</td>
      <td align="left" valign="top"><input id="lng" type="text" name="longitude" /></td>
     </tr>
     <tr align="left" valign="top">
      <td align="left" valign="top">Số điện thoại</td>
      <td align="left" valign="top"><input type="text" name="telephone" /></td>
    </tr>
	<tr align="left" valign="top">
	  <td align="left" valign="top">Ghi chú</td>
	  <td align="left" valign="top"><textarea name="keywords"></textarea></td>
	</tr>
    <tr align="left" valign="top">
     <td align="left" valign="top"></td>
     <td align="left" valign="top"><input type="submit" value="Save"></td>
    </tr>
   </tbody>
  </table>
 </form>
 <script>
  var map = L.map('map').setView([9.758963, 105.601753], 13);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);


   
  function putDraggable() {
   /* create a draggable marker in the center of the map */
   draggableMarker = L.marker([ map.getCenter().lat, map.getCenter().lng], {draggable:true, zIndexOffset:900}).addTo(map);
   
   /* collect Lat,Lng values */
   draggableMarker.on('dragend', function(e) {
    $("#lat").val(this.getLatLng().lat);
    $("#lng").val(this.getLatLng().lng);
   });
  }
   
  $( document ).ready(function() {
   putDraggable();
  });
 </script>
 </body>
</html>