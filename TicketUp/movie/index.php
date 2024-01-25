<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Movie Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
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
    .thumbnail-container {
        height: 45vh;
        background-position: center;
        background-size: cover;
        box-shadow: inset 0 0 100em 5em black;
    }

    .trailer-body iframe {
        height: 100%;
        position: relative;
        right: 0;
        /* top:5%; */
    }

    .date-box {
        /* background-color: black; */
        width: 60px;
        height: 60px;
        background-color: #383d48;
        transition: all ease-in .2s;
    }
    .poster-details{
        backdrop-filter: blur(5em);
    }
    .show-time {
        background-color: #383d48;
        transition: all ease-in .2s;

    }
</style>
</head>

<body class="bg-soledark">
    <?php include '../assests/header.php' ?>
    <main class="main">
        <div class="container-fluid thumbnail-container row">
            <div class="movie-details col-sm-6 p-5  ">
                <div class="poster-details p-4 bg-dark bg-opacity-25 rounded-3">
                    <h1 class="h1 text-soleshead"><?php echo $_GET["name"] ?></h1>
                    <div>

                        <?php
                $conn = mysqli_connect("localhost", "root", "", "ticketup");
                $x=$_GET["name"];
                $sql = "SELECT * FROM ticketupmovies where MovieName = '$x'";
                $data = $conn->query($sql);
                $backposter;
                foreach ($data as $a) {
                    $backposter=$a["url"];
                    $trailer=$a["MovieTrailer"];
                    $description=$a["Description"];
                    echo '
                    <p class="text-solesans fs-5">'.$description.'</p>
        <span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">' . $a["ShowFormat"] . '</span>
        <span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">' . $a["ShowLang"] . '</span>
        <span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">' . $a["Genres"] . '</span>';
                }
                $conn->close();
                ?>
                    </div>
                </div>
            </div>
            <div class="trailer-body col-sm-6 d-flex align-items-center justify-content-center">
                <iframe class="rounded-3 " style="width:80%; height:85%;" src="<?php echo str_replace("watch?v=","embed/","$trailer"); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container-fluid shadow">
            <div class="container">
                <div class="show-dates d-flex p-2">
                    <a href="./&date=_date_" class="date-box d-grid btn btn-outline-dark mx-1 p-2">
                        <div class="fw-semibold text-soleshead">Mon</div>
                        <div class="fw-semibold text-soleshead">19</div>
                    </a>
                    <a href="./&date=_date_" class="date-box d-grid btn btn-outline-dark mx-1 p-2">
                        <div class="fw-semibold text-soleshead">Tue</div>
                        <div class="fw-semibold text-soleshead">20</div>
                    </a>
                    <a href="./&date=_date_" class="date-box d-grid btn btn-outline-dark mx-1 p-2">
                        <div class="fw-semibold text-soleshead">Wed</div>
                        <div class="fw-semibold text-soleshead">21</div>
                    </a>
                    <a href="./&date=_date_" class="date-box d-grid btn btn-outline-dark mx-1 p-2">
                        <div class="fw-semibold text-soleshead">Thu</div>
                        <div class="fw-semibold text-soleshead">22</div>
                    </a>
                    <a href="./&date=_date_" class="date-box d-grid btn btn-outline-dark mx-1 p-2">
                        <div class="fw-semibold text-soleshead">Fri</div>
                        <div class="fw-semibold text-soleshead">23</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container my-3 rounded-4 shadow p-2 bg-secondary bg-opacity-25">
            <div class="p-1">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "ticketup");
                $sql = "SELECT * FROM ticketupcinemas WHERE city='$_GET[city]'";
                $data = $conn->query($sql);
                foreach ($data as $fetch) {
                ?>
                <?php echo  '
                <div class="cinema-timings row">
                    <div class="cinema-info col-4">
                    <div class="cinema-name text-soleshead fw-bold fs-4 mx-1">
                            ' . $fetch["CinemaName"] . '
                        </div>
                        <div class="cinema-info">
                            <div class="cine-info-badges">
                                <span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">' . $fetch["is-mticket"] . '</span>
                                <span class="badge rounded-2 bg-secondary bg-opacity-25 p-2 text-solesans my-1">' . $fetch["is-parking"] . '</span>
                            </div>
                        </div>
                    </div>
                    <div class="show-timings d-flex flex-wrap col-8">
                    ';
                    for ($timing = 1; $timing <= 10; $timing++) {
                        if (empty($fetch["timing$timing"])){continue;}else{
                        echo ' <a href="./seatlayout?moviename=' . $_GET["name"] . '&cinema=' . $fetch["CinemaName"] . '&showtime=' . $fetch["timing$timing"] . '&showformat=' . $fetch["timing$timing-format"] . '&cityname=' . $fetch["city"] . '" class="show-time d-grid btn btn-dark m-2 p-2 px-4 border-0">
                        <div class="fw-bold text-solesans">'.$fetch["timing$timing"].'</div><div class="text-secondary">' . $fetch["timing$timing-format"].'</div></a>';}
                    }

                    echo '</div>
                </div>
                <hr class="text-secondary">
                ';
            }
            ?>
            </div>
            </div>
            <div class="container my-3 rounded-4 shadow p-2 bg-secondary bg-opacity-25">
                <h3 class="mx-4 text-solesans fw-bold">Popular Cinemas in <?php echo $_GET["city"] ?></h3>
                <div class="cinemas-name m-2 p-2">

                    <?php foreach ($data as $fetch) {
                        echo '<span class=" btn text-solesans fw-semibold shadow rounded-5 p-1 px-2 m-1">' . $fetch["CinemaName"] . '</span>';
                    } ?>
                </div>
            </div>
    </main>
    <?php include '../assests/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
    .thumbnail-container {
        background-image: <?php echo 'url("'.$backposter.'")' ?>;
    }
    </style>
</body>
</html>







<!-- INSERT INTO `ticketupadmin` (`MovieName`, `url`, `ReleaseDate`, `ShowFormat`, `ShowLang`, `Genres`) VALUES ('Brahmashtra Part One : Shiva ', 'https://m.media-amazon.com/images/S/stores-image-uploads-eu-prod/7/AmazonStores/A21TJRUUN4KGV/7a6d5a9074c2f6bbfa0b41e5bca0883c.w3000.h800._CR0%2C0%2C3000%2C800_SX1500_.jpg', '2022-09-22', '3D', 'Hindi English Marathi Telgu', 'Action Thriller Fantasy Mystrey') -->

<!-- y6Uv3Zg4bH_MNAhy -->

https://www.youtube.com/embed/8FkLRUJj-o0
https://www.youtube.com/watch?v=8FkLRUJj-o0