<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cinyee chiu</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cinyee";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("<strong>Connection failed: </strong><br>" . $conn->connect_error);
    } 
    else{
    	echo"Database connected successfully.<br></br>";
    }

    $query = "SELECT * FROM portfolio";
    $result = mysqli_query($conn, $query);

    printf("<br>The query '$query' returned %d rows. \n", $result->num_rows);
    echo"</br></br></br></br>";

        if (mysqli_num_rows($result) > 0){
        echo "<div class='container'><h1>Cinyee Chiu' profolio</h1><div class='row'>";
        $count = 0;
        
        while($row = mysqli_fetch_assoc($result)){
            $count = $count + 2;
            echo "<section class='col-12 col-sm-6 col-md-4 col-lg-2'>";
            echo "<img class='icon' src='".$row['icon']."' alt='Icon'><h3>".$row["name"]."</h3><p>".$row["sub"]."</p>";
            echo "</section>";
            if ($count == 12){
                echo"</div><div class='row'>";
                $count = 0;
            }
        }
        echo"</div>";
    }

?>