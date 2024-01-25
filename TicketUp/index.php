<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Movie Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    .main {
        margin-top: 5rem;
    }
    .carousel-item {
        max-height: 400px;
    }
    @media screen and (max-width:1200px) {
        .bheader .btn {
            font-size: 14px;
            padding: 3px;
        }

        #carouselcinemas span {
            display: block;
        }

    }
    .movies-cont .row .col a {
        box-shadow: 0 0 10px 0 #00000073;
    }
    .movies-cont .row .col a:hover {
        box-shadow: 0 0 2rem 0 black;
    }
</style>
<!-- <script>
    $(document).ready(function(){
        $("#cityselector").modal('show');
    });
</script> -->
</head>

<body class="bg-soledark">
    <?php include './assests/header.php' ?>
    <main class="main ">
        <div class="slider ">
            <div class="carousel slide container-lg mt-1" id="carouselInterval" data-bs-ride="carousel">
                <div class="carousel-inner rounded-4">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="https://m.media-amazon.com/images/S/stores-image-uploads-eu-prod/7/AmazonStores/A21TJRUUN4KGV/7a6d5a9074c2f6bbfa0b41e5bca0883c.w3000.h800._CR0%2C0%2C3000%2C800_SX1500_.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="https://posterspy.com/wp-content/uploads/2015/11/Untitled-1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="https://www.thetelugufilmnagar.com/latest-telugu-movies/img/Mamangam.webp" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="https://www.thetelugufilmnagar.com/latest-telugu-movies/img/Johaar.webp" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container-fluid my-2 bheader p-2 shadow">
            <div class="container-lg">
                <div class="feed">
                    <div class="btn-group bg-dark p-1 " role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check " name="ShowDetails" id="NowShowing" autocomplete="off">
                        <label class="btn btn-dark" for="NowShowing">Now Showing</label>

                        <input type="radio" class="btn-check" name="ShowDetails" id="ComingSoon" autocomplete="off">
                        <label class="btn btn-dark" for="ComingSoon">Coming Soon</label>

                        <input type="radio" class="btn-check" name="ShowDetails" id="AllMovies" autocomplete="off" checked>
                        <label class="btn btn-dark" for="AllMovies">All Movies</label>
                    </div>
                    <div class="btn-group bg-dark p-1 " role="group" aria-label="Basic checkbox toggle button group">
                        <input type="radio" class="btn-check " name="ShowFormat" id="2dShow" autocomplete="off">
                        <label class="btn btn-dark" for="2dShow">2D</label>

                        <input type="radio" class="btn-check" name="ShowFormat" id="3dShow" autocomplete="off">
                        <label class="btn btn-dark" for="3dShow">3D</label>
                    </div>
                    <div class="btn-group bg-dark p-1 " role="group" aria-label="Basic checkbox toggle button group">
                        <input type="radio" class="btn-check " name="ShowLang" id="Hindi" autocomplete="off">
                        <label class="btn btn-dark" for="Hindi">Hindi</label>

                        <input type="radio" class="btn-check" name="ShowLang" id="English" autocomplete="off">
                        <label class="btn btn-dark" for="English">English</label>

                        <input type="radio" class="btn-check" name="ShowLang" id="Other" autocomplete="off">
                        <label class="btn btn-dark" for="Other">Other Language</label>
                    </div>
                    <div class="btn-group bg-dark p-1 " role="group" aria-label="Basic checkbox toggle button group">
                        <input type="radio" class="btn-check " name="Genres" id="Action" autocomplete="off">
                        <label class="btn btn-dark" for="Action">Action</label>

                        <input type="radio" class="btn-check" name="Genres" id="Drama" autocomplete="off">
                        <label class="btn btn-dark" for="Drama">Drama</label>

                        <input type="radio" class="btn-check" name="Genres" id="Thriller" autocomplete="off">
                        <label class="btn btn-dark" for="Thriller">Thriller</label>

                        <input type="radio" class="btn-check" name="Genres" id="Historical" autocomplete="off">
                        <label class="btn btn-dark" for="Historical">Historical</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container shadow movies-cont my-4 p-3 rounded-3 ">

            <div class="row row-cols-1 row-cols-md-5 g-4">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "ticketup");
                $sql = "SELECT * FROM ticketupmovies";
                $data = $conn->query($sql);
                try{
                    if(empty($_GET['city'])){
                        $_GET['city'] = 'Agra';
                    }
                }
                catch(Exception $e) {
                    echo 'Message: ' .$e->getMessage();//mkhjhufhghfgsuhifdsghfagdfgfw
                  }

                foreach ($data as $a) {
                                                            // $_GET['city'] = 'Agra'; // ...temp
                    echo '<div class="col">
        <a href="./movie/?name=' . $a["MovieName"] . '&city=' . $_GET['city'] . '" class="text-break btn">
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
        <div class="container my-3 rounded-4 shadow p-2 bg-secondary bg-opacity-25">
                <h3 class="mx-4 text-solesans fw-bold">Popular Cinemas in <?php echo $_GET["city"] ?></h3>
                <div class="cinemas-name m-2 p-2">

                    <?php   
                            $sql = "SELECT * FROM ticketupcinemas WHERE city='$_GET[city]'";
                            $data = $conn->query($sql);
                            foreach ($data as $fetch) {
                        echo '<span class=" btn text-solesans fw-semibold shadow rounded-5 p-1 px-2 m-1">' . $fetch["CinemaName"] . '</span>';
                    } ?>
                </div>
            </div>
    </main>
    <?php include './assests/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>
<?php
$conn->close();
?>








<!-- INSERT INTO `ticketupadmin` (`MovieName`, `url`, `ReleaseDate`, `ShowFormat`, `ShowLang`, `Genres`) VALUES ('Brahmashtra Part One : Shiva ', 'https://m.media-amazon.com/images/S/stores-image-uploads-eu-prod/7/AmazonStores/A21TJRUUN4KGV/7a6d5a9074c2f6bbfa0b41e5bca0883c.w3000.h800._CR0%2C0%2C3000%2C800_SX1500_.jpg', '2022-09-22', '3D', 'Hindi English Marathi Telgu', 'Action Thriller Fantasy Mystrey') -->