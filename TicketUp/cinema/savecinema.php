<?php
$conn=mysqli_connect("localhost","root","","ticketup");
if (!$conn) {
die('error');
}
if (empty($_POST["CinemaName"])){$CinemaName='Default';}
else{$CinemaName=$_POST["CinemaName"];}
echo $CinemaName;// to be deleted...
if (empty($_POST["city"])){$city='Default';}
else{$city=$_POST["city"];}
echo $city;// to be deleted...

if (empty($_POST["rows-in-silver"])){$rows_in_silver='Default';}
else{$rows_in_silver=$_POST["rows-in-silver"];}
echo $rows_in_silver;// to be deleted...
if (empty($_POST["cols-in-silver"])){$cols_in_silver='Default';}
else{$cols_in_silver=$_POST["cols-in-silver"];}
echo $cols_in_silver;// to be deleted...

if (empty($_POST["rows-in-gold"])){$rows_in_gold='Default';}
else{$rows_in_gold=$_POST["rows-in-gold"];}
echo $rows_in_gold;// to be deleted...
if (empty($_POST["cols-in-gold"])){$cols_in_gold='Default';}
else{$cols_in_gold=$_POST["cols-in-gold"];}
echo $cols_in_gold;// to be deleted...

if (empty($_POST["rows-in-platinum"])){$rows_in_platinum='Default';}
else{$rows_in_platinum=$_POST["rows-in-platinum"];}
echo $rows_in_platinum;// to be deleted...
if (empty($_POST["cols-in-platinum"])){$cols_in_platinum='Default';}
else{$cols_in_platinum=$_POST["cols-in-platinum"];}
echo $cols_in_platinum;// to be deleted...

if (empty($_POST["silver-price"])){$silver_price='Default';}
else{$silver_price=$_POST["silver-price"];}
echo $silver_price;// to be deleted...
if (empty($_POST["gold-price"])){$gold_price='Default';}
else{$gold_price=$_POST["gold-price"];}
echo $gold_price;// to be deleted...
if (empty($_POST["platinum-price"])){$platinum_price='Default';}
else{$platinum_price=$_POST["platinum-price"];}
echo $platinum_price;// to be deleted...

if (empty($_POST["is-mticket"])){$is_mticket='Default';}
else{$is_mticket=$_POST["is-mticket"];}
echo $is_mticket;// to be deleted...
if (empty($_POST["is-parking"])){$is_parking='Default';}
else{$is_parking=$_POST["is-parking"];}
echo $is_parking;// to be deleted...

if (empty($_POST["description"])){$description='Default';}
else{$description=$_POST["description"];}
echo $description;// to be deleted...

for ($i=1; $i < 11; $i++) { 
  if (empty($_POST["timing$i"])){$timing[$i]='Default';}
  else{$timing[$i]=$_POST["timing$i"];}
  if (empty($_POST["timing$i-format"])){$timingformat[$i]='Default';}
  else{$timingformat[$i]=$_POST["timing$i-format"];}
  echo $timing[$i] . $timingformat[$i]; echo '<br>';// to be removed...
}
    $sql = "INSERT INTO ticketupcinemas VALUES (NULL,'$CinemaName','$city','$rows_in_silver','$cols_in_silver','$rows_in_gold','$cols_in_gold','$rows_in_platinum','$cols_in_platinum','$silver_price','$gold_price','$platinum_price','$is_mticket','$is_parking','$description','$timing[1]','$timingformat[1]','$timing[2]','$timingformat[2]','$timing[3]','$timingformat[3]','$timing[4]','$timingformat[4]','$timing[5]','$timingformat[5]','$timing[6]','$timingformat[6]','$timing[7]','$timingformat[7]','$timing[8]','$timingformat[8]','$timing[9]','$timingformat[9]','$timing[10]','$timingformat[10]')";
    // $sql="SELECT * FROM ticketupcinemas;";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "<br>" . $conn->error;
    }

    $conn->close();
?>