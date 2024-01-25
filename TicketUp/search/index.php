<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Movie - TicketUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .movies-cont .row .col a {
            box-shadow: 0 0 10px 0 #00000073;
        }

        .movies-cont .row .col a:hover {
            box-shadow: 0 0 2rem 0 black;
        }
    </style>
</head>

<body class="bg-soledark">
    <?php include '../assests/header.php' ?>

    <main class="my-5 py-3">
        <div class="container shadow movies-cont my-4 p-3 rounded-2">

            <h3 class="text-soleshead">Search Results for <b class="text-secondary">"<?php echo $_GET['query'] ?>"</b> :</h3>
            <div class="container shadow movies-cont my-4 p-3 rounded-3 ">

                <div class="row row-cols-1 row-cols-md-5 g-4">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "ticketup");
                    $sql = "SELECT * FROM `ticketupmovies` WHERE match(MovieName,ShowFormat,ShowLang,Genres) against ('$_GET[query]');";
                    $data = $conn->query($sql);
                    foreach ($data as $a) {
                        echo '<div class="col">
<a href="../movie/?name=' . $a["MovieName"] . '" class="text-break btn">
<div class="text-start">
<img src="' . $a["url"] . '" class="card-img-top" alt="' . $a["MovieName"] . '"><div class="card-body py-1 px-0">
<h5 class="card-title text-soleshead my-2">' . $a["MovieName"] . '</h5>
<p class="card-text"><span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">' . $a["ShowFormat"] . '</span>
<span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">' . $a["ShowLang"] . '</span>
<span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">' . $a["Genres"] . '</span>
<span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">Released on ' . $a["ReleaseDate"] . '</span></p></div></div></a></div>';
                    }
                    ?>
                </div>

            </div>

        </div>
    </main>

    <?php include '../assests/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>