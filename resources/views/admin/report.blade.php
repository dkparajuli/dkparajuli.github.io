 <html>

    <!DOCTYPE HTML>
   
    <head>
   
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
       <p>
        
             
        </p>
        @foreach ($dat as $dats)
      
        {{$dats->todaydate}}
        
        
        <?php

        $conn = new mysqli("localhost", "root", "", "cplaravel"); 
        
        $sql = "SELECT distinct todaydate from sales";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        
        echo $row["todaydate"];
        
        
        
    $dataPoints = array(
//    	array("y" => 25, "label" => "Sunday"),
//    	array("y" => 15, "label" => "Monday"),
//    	array("y" => 25, "label" => "Tuesday"),
//    	array("y" => 5, "label" => "Wednesday"),
//    	array("y" => 10, "label" => "Thursday"),
//    	array("y" => 0, "label" => "Friday"),
   	array("y" => 5, "label" => $row["todaydate"])
    );
    }}
            else{
                echo "no";
            }
    ?>
         @endforeach
         <script>
    window.onload = function () {
     
    var chart = new CanvasJS.Chart("chartContainer", {
    	title: {
    		text: "Push-ups Over a Week"
    	},
    	axisY: {
    		title: "Number of Push-ups"
    	},
    	data: [{
    		type: "line",
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();
     
    }
    </script>
        
    </body>
    </html>                              