<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fill Cinema Details</title>
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
</head>

<body class="bg-soledark">
    <?php include '../assests/header.php' ?>
    <main class="main">
        <div class="container my-3 rounded-4 shadow p-2 bg-secondary bg-opacity-25">
            <div class="text-solesans text-center">
                <h2 class="fw-bold">Cinema Details</h2>
            </div>
            <form class="row g-3 p-3 text-solesans " method="post" action="savecinema.php">
                <div class="text-soleshead text-start ">
                    <h4 class="fw-bold">Basic Details</h4>
                </div>
                <div class="col-md-6">
                    <label for="CinemaName" class="form-label">Cinema Name</label>
                    <input type="text" class="form-control" id="CinemaName" name="CinemaName" required>
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">City Name</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <div class="text-soleshead text-start">
                    <h4 class="fw-bold">Seat Layout</h4>
                </div>
                <div class="col-md-2">
                    <label for="rows-in-silver" class="form-label">Rows in silver</label>
                    <input type="number" class="form-control" id="rows-in-silver" name="rows-in-silver" required>
                </div>
                <div class="col-md-2">
                    <label for="cols-in-silver" class="form-label">Columns in silver</label>
                    <input type="number" class="form-control" id="cols-in-silver" name="cols-in-silver" required>
                </div>
                <div class="col-md-2">
                    <label for="rows-in-gold" class="form-label">Rows in gold</label>
                    <input type="number" class="form-control" id="rows-in-gold" name="rows-in-gold" required>
                </div>
                <div class="col-md-2">
                    <label for="cols-in-gold" class="form-label">Columns in gold</label>
                    <input type="number" class="form-control" id="cols-in-gold" name="cols-in-gold" required>
                </div>
                <div class="col-md-2">
                    <label for="rows-in-platinum" class="form-label">Rows in platinum</label>
                    <input type="number" class="form-control" id="rows-in-platinum" name="rows-in-platinum" required>
                </div>
                <div class="col-md-2">
                    <label for="cols-in-platinum" class="form-label">Columns in platinum</label>
                    <input type="number" class="form-control" id="cols-in-platinum" name="cols-in-platinum" required>
                </div>
                <div class="col-md-4">
                    <label for="silver-price" class="form-label">Price of silver seat</label>
                    <input type="number" class="form-control" id="silver-price" name="silver-price" required>
                </div>
                <div class="col-md-4">
                    <label for="gold-price" class="form-label">Price of gold seat</label>
                    <input type="number" class="form-control" id="gold-price" name="gold-price" required>
                </div>
                <div class="col-md-4">
                    <label for="platinum-price" class="form-label">Price of platinum seat</label>
                    <input type="number" class="form-control" id="platinum-price" name="platinum-price" required>
                </div>
                <!--  -->
                <div class="text-soleshead text-start">
                    <h4 class="fw-bold">Show Timings and Format<span class="text-secondary" style="font-size: small;"> (Fill atleast 4 Show timings)</span class="badge"></h4>
                </div>
                <div class="col-md-3">
                    <label for="timing1" class="form-label">First Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing1" required>
                        <select class="form-select form-control" id="timing1-format" name="timing1-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing2" class="form-label">Second Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing2" required>
                        <select class="form-select form-control" id="timing2-format" name="timing2-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing3" class="form-label">Third Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing3" required>
                        <select class="form-select form-control" id="timing3-format" name="timing3-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing4" class="form-label">Fourth Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing4" required>
                        <select class="form-select form-control" id="timing4-format" name="timing4-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing5" class="form-label">Fifth Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing5">
                        <select class="form-select form-control" id="timing5-format" name="timing5-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing6" class="form-label">Sixth Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing6">
                        <select class="form-select form-control" id="timing6-format" name="timing6-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing7" class="form-label">Seventh Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing7">
                        <select class="form-select form-control" id="timing7-format" name="timing7-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing8" class="form-label">Eighth Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing8">
                        <select class="form-select form-control" id="timing8-format" name="timing8-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing9" class="form-label">Ninth Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing9">
                        <select class="form-select form-control" id="timing9-format" name="timing9-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="timing10" class="form-label">Tenth Show</label>
                    <div class="input-group">
                        <input type="time" class="form-control" name="timing10">
                        <select class="form-select form-control" id="timing10-format" name="timing10-format">
                            <option selected disabled>select format</option>
                            <option value="2D">2D</option>
                            <option value="3D">3D</option>
                        </select>
                    </div>
                </div>
                <div class="text-soleshead text-start">
                    <h4 class="fw-bold">Other Facilities</h4>
                </div>
                  <div class="form-check col-md-3">
                    <label class="form-check-label" for="is-mticket">M-Ticket Facility Available</label>
                    <input class="form-check-input p-1 form-control" type="checkbox" value="M-ticket Available" id="is-mticket" name="is-mticket">
                </div>
                <div class="form-check col-md-3">
                    <label class="form-check-label" for="is-parking">Parking Facility Available</label>
                    <input class="form-check-input p-1 form-control" type="checkbox" value="Parking Available" id="is-parking" name="is-parking">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn bg-soledark text-soleshead fw-bold">Add Cinema</button>
                </div>
            </form>
        </div>
    </main>
    <?php include '../assests/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>







<!-- INSERT INTO `ticketupadmin` (`MovieName`, `url`, `ReleaseDate`, `ShowFormat`, `ShowLang`, `Genres`) VALUES ('Brahmashtra Part One : Shiva ', 'https://m.media-amazon.com/images/S/stores-image-uploads-eu-prod/7/AmazonStores/A21TJRUUN4KGV/7a6d5a9074c2f6bbfa0b41e5bca0883c.w3000.h800._CR0%2C0%2C3000%2C800_SX1500_.jpg', '2022-09-22', '3D', 'Hindi English Marathi Telgu', 'Action Thriller Fantasy Mystrey') -->


<!-- INSERT INTO `ticketupcinemas` (`S.No`, `CinemaName`, `city`, `rows-in-silver`, `cols-in-silver`, `rows-in-gold`, `cols-in-gold`, `rows-in-platinum`, `cols-in-platinum`, `silver-price`, `gold-price`, `platinum-price`, `is-mticket`, `is-parking`, `description`, `timing1`, `timing1-format`, `timing2`, `timing2-format`, `timing3`, `timing3-format`, `timing4`, `timing4-format`, `timing5`, `timing5-format`, `timing6`, `timing6-format`, `timing7`, `timing7-format`, `timing8`, `timing8-format`, `timing9`, `timing9-format`, `timing10`, `timing10-format`) VALUES (NULL, 'XYZ Cinema', 'Agra', '6', '16', '4', '22', '1', '14', '250', '450', '800', 'M-ticket Available', 'Parking Available', 'XYZ cinema is in Agra', '7:00 AM', '2D', '9:15 AM', '3D', '11:00 AM', '3D', '12:00 PM', '2D', '1:15 PM', '2D', '3:00 PM', '3D', '4:00 PM', '2D', '5:00 PM', '3D', '6:00 PM', '3D', '9:15 PM', '3D'); -->





              