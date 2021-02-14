<?php
 $db_connection = mysqli_connect('localhost','root','','popup');
?>
<!DOCTYPE HTML>
<html>
<head>
<body>


			
 <meta charset="utf-8">
 <title>
 Create Google Charts PHP Google Charts - onlinecode 
 </title>
 <!-- js of google of chart --> 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 
 <script type="text/javascript">
 google.load('visualization', '1', {packages: ['corechart', 'bar']});
 google.setOnLoadCallback(drawMaterial);

 function drawMaterial() {
 var data_val = google.visualization.arrayToDataTable([
 ['designation', 'male', 'female'],
 <?php 
 $query = "SELECT count(idem) AS count, designation FROM employees GROUP BY designation";

 $query_result = mysqli_query($db_connection,$query);

 while($row_val = mysqli_fetch_array($query_result)){

 echo "['".$row_val['designation']."',";
 $query_visitors = "SELECT count(distinct idem) AS count FROM employees WHERE designation='".$row_val['designation']."' ";
 $query_visitors_result = mysqli_query($db_connection,$query_visitors);
 $visitors_result = mysqli_fetch_assoc($query_visitors_result);
 
 echo $visitors_result['count'];
 
 

 $rvisits_val = $row_val['count']-$visitors_result['count'];

 echo ",".$rvisits_val."],";
 }
 ?>
 ]);

 var options_val = {
 
 title: 'Country wise new and returned visitors',
 
 bars: 'horizontal'
 };
 var material_val = new google.charts.Bar(document.getElementById('barchart'));
 material_val.draw(data_val, options_val);
 }
 </script>
</head>
<body>
 <h3>Bar Chart</h3>
 <div id="barchart" style="width: 910px; height: 510px;"></div>
</body>
</html>