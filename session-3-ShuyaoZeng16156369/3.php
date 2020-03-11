 <?php

 if(!$_POST){
echo '<html>
<head>
	<title>API Showcase</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
  	<div class="form-group">
    <label for="select" class="class="col-12 col-md-6 col-sm-2 control-label"><h3>Please select a city</h3></label>	
        <div class="col-sm-2">	
		    <select class="form-control" name="city">
		        <option value="city">city</option>
			    <option value="Wuhan">Wuhan</option>
			    <option value="Shanghai">Shanghai</option>
			    <option value="Beijing">Beijing</option>
			    <option value="Tokyo">Tokyo</option>
			    <option value="London">London</option>
			    <option value="Birmingham">Birmingham</option>
			    <option value="New York">New York</option>
			    <option value="Los Angeles">Los Angeles</option>
			    <option value="Sydney">Sydney</option>
		    </select>
        </div>
       <div class="col-12 col-md-6 col-sm-4 "></div>
     </div>
    <div class="col-12 col-md-6 col-sm-4"><button>Sibmit</button></div>
</form>';
   
    $curl = curl_init();
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	$query = array(
	"q" => 'Wuhan',
	"APPID" => '4dea3432c6f316385941206869342cd6'
    );

    curl_setopt($curl, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather"."?".http_build_query($query));

        
        $output = curl_exec($curl);
        curl_close($curl);
        $output = json_decode($output,true);

		echo '<div class="container">
			<div class="col-12 col-md-6 col-sm-2"><h3>'.$output["name"].'</h3></div><br>
				<div class="row">';
				echo "<div class='col-12 col-md-6 col-sm-2'>
				<h5>weather: ".$output["weather"][0]['main']."</h5><br>";
				echo "<h5> Temperature: ".$output["main"]['temp']."(Kelvin)</h5><br>";
				echo "<h5> Wind speed: ".$output["wind"]['speed']."(meter/sec)</h5><br>";
				echo "<h5> Wind direction: ".$output["wind"]['deg']."(degrees)</h5><br>";
				echo "<p>".$output["weather"][0]['description']."</p><br>
				</div>
				</div>";
echo '</body></html>';
}
else{
	echo '<html>
	<head>
	<title>API Showcase</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
  	<div class="form-group">
    <label for="select" class="col-12 col-md-6 col-sm-2 control-label"><h3>Please select a city</h3></label>	
        <div class="col-sm-2">	
		    <select class="form-control" name="city">
		        <option value="city">city</option>
			    <option value="Wuhan">Wuhan</option>
			    <option value="Shanghai">Shanghai</option>
			    <option value="Beijing">Beijing</option>
			    <option value="Tokyo">Tokyo</option>
			    <option value="London">London</option>
			    <option value="Birmingham">Birmingham</option>
			    <option value="New York">New York</option>
			    <option value="Los Angeles">Los Angeles</option>
			    <option value="Sydney">Sydney</option>
		    </select>
        </div>
       <div class="col-12 col-md-6 col-sm-4 "></div>
     </div>
    <div class="col-12 col-md-6 col-sm-4"><button>Sibmit</button></div>
</form>';
    $curl = curl_init();
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	$query = array(
		"q" => $_POST['city'],
	"APPID" => '4dea3432c6f316385941206869342cd6'
    );

    curl_setopt($curl, CURLOPT_URL, "http://api.openweathermap.org/data/2.5/weather"."?".http_build_query($query));

        
        $output = curl_exec($curl);
        curl_close($curl);
        $output = json_decode($output,true);

		echo '<div class="container">
			<div class="col-12 col-md-6 col-sm-2"><h3>'.$output["name"].'</h3></div><br>
				<div class="row">';
				echo "<div class='col-12 col-md-6 col-sm-2'>
				<h5>weather: ".$output["weather"][0]['main']."</h5><br>";
				echo "<h5> Temperature: ".$output["main"]['temp']."(Kelvin)</h5><br>";
				echo "<h5> Wind speed: ".$output["wind"]['speed']."(meter/sec)</h5><br>";
				echo "<h5> Wind direction: ".$output["wind"]['deg']."(degrees)</h5><br>";
				echo "<p>".$output["weather"][0]['description']."</p><br>
				</div>
				</div>";
echo '</body></html>';


}
?>

</body>
</html>
