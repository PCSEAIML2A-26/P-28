<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fill Movie Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .form-control {
            background-color: #191c24 !important;
            border: none;
            color: #a6becd;
        }
        .form-control:focus {
            color: #a6becd;
            box-shadow:0 0 5px 0px black;
        }
    .main {
        margin-top: 5rem;
    }
    .bg-soledark {
    background-color: #191c24 !important;
}
.text-solesans{ 
   color: #a6becd !important;
}
.text-soleshead{ 
   color: #a9e2ff !important;
}
.cityname{
    margin: .5em;
}
.offcanvas{
    --bs-offcanvas-height: 80vh!important;
}
</style>
</head>

<body class="bg-soledark">
    <?php include '../assests/header.php' ?>
    <main class="main">
<?php
$conn=mysqli_connect("localhost","root","","ticketup");
if (!$conn) {
die('error');
}
if (empty($_POST["MovieName"])){$MovieName='Default';}
else{$MovieName=$_POST["MovieName"];}
if (empty($_POST["imgurl"])){$imgurl='Default';}
else{$imgurl=$_POST["imgurl"];}
if (empty($_POST["description"])){$description='Default';}
else{$description=$_POST["description"];}
if (empty($_POST["releasedate"])){$releasedate='Default';}
else{$releasedate=$_POST["releasedate"];}
if (empty($_POST["trailerurl"])){$trailerurl='Default';}
else{$trailerurl=$_POST["trailerurl"];}

if (empty($_POST["2d"])){$_POST["2d"]='';}
if (empty($_POST["3d"])){$_POST["3d"]='';}
if (empty($_POST["imax3d"])){$_POST["imax3d"]='';}
if (empty($_POST["2d"]) && empty($_POST["3d"]) && empty($_POST["imax3d"])){$MovieFormat='Default';}
else{$MovieFormat=$_POST["2d"].' '.$_POST["3d"].' '.$_POST["imax3d"];}

if (empty($_POST["hindi"])){$_POST["hindi"]='';}
if (empty($_POST["english"])){$_POST["english"]='';}
if (empty($_POST["tamil"])){$_POST["tamil"]='';}
if (empty($_POST["telugu"])){$_POST["telugu"]='';}

if (empty($_POST["hindi"]) && empty($_POST["english"]) && empty($_POST["tamil"]) && empty($_POST["telugu"])){$MovieFormat='Default';}
else{$MovieLang=$_POST["hindi"].' '.$_POST["english"].' '.$_POST["tamil"].' '.$_POST["telugu"];}

if (empty($_POST["action"])){$_POST["action"]='';}
if (empty($_POST["suspense"])){$_POST["suspense"]='';}
if (empty($_POST["thriller"])){$_POST["thriller"]='';}
if (empty($_POST["romance"])){$_POST["romance"]='';}
if (empty($_POST["crime"])){$_POST["crime"]='';}
if (empty($_POST["horror"])){$_POST["horror"]='';}

if (empty($_POST["action"]) && empty($_POST["suspense"]) && empty($_POST["thriller"]) && empty($_POST["romance"]) && empty($_POST["crime"]) && empty($_POST["horror"])){$MovieFormat='Default';}
else{$MovieGenre=$_POST["action"].' '.$_POST["suspense"].' '.$_POST["thriller"].' '.$_POST["romance"].' '.$_POST["crime"].' '.$_POST["horror"];}
echo $MovieGenre;// to be deleted...

$sql = "INSERT INTO ticketupmovies VALUES (NULL,'$MovieName','$imgurl','$MovieFormat','$MovieLang','$MovieGenre','$releasedate','$trailerurl','$description')";
if ($conn->query($sql) === TRUE) {
  echo '<h3 class="text-light m-3">Movie Details inserted successfully</h3><a class="btn btn-secondary m-3" href="/ticketup?city=Agra">Go to HomePage</a>';
} else {
  echo "<br>" . $conn->error;
}

$conn->close();
?>
    </main>
    <!-- <?php include '../assests/footer.php'?> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>