<?php  
 $connect = mysqli_connect("localhost", "root", "", "popup");  
 $query = "SELECT gender, count(*) as number FROM users GROUP BY gender";  
 $result = mysqli_query($connect, $query);  
 ?>  
 
 </html>  
 </body>
<?php include('includes/header.php');?>

	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
<div class="col-md-9">
					
   
           <title>Charts</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: '**************                Percentages of male and female users',  
                     is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  

           }  
           </script>  

       
      </head>  
      <body>  

           <br /><br />  
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 1400px; height: 300px;"></div>  
           </div>  
</div>
				</div>

			</div>
		</div>
	</div>
</div>
      </body>  
 </html>  