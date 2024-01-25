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
        <div class="container my-3 rounded-4 shadow p-2 bg-secondary bg-opacity-25">
            <div class="text-solesans text-center">
                <h2 class="fw-bold">Movie Details</h2>
            </div>
            <form class="row g-3 p-3 text-solesans " method="post" action="/ticketup/admin/savemovie.php">
                <div class="text-soleshead text-start ">
                    <h4 class="fw-bold">Basic Details</h4>
                </div>
                <div class="col-md-4">
                    <label for="MovieName" class="form-label">Movie Name</label>
                    <input type="text" class="form-control" id="MovieName" name="MovieName" required>
                </div>
                <div class="col-8">
                    <label for="imgurl" class="form-label">Movie Poster URL</label>
                    <input type="text" class="form-control" id="imgurl" name="imgurl" required>
                </div>
                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>



                <!--  -->
                <div class="text-soleshead text-start">
                    <h4 class="fw-bold">Release Date and Trailer</h4>
                </div>
                <div class="col-4">
                    <label for="releasedate" class="form-label">Movie Release Date</label>
                    <input type="date" class="form-control" id="releasedate" name="releasedate" required>
                </div>
                <div class="col-8">
                    <label for="trailerurl" class="form-label">Movie Trailer URL</label>
                    <input type="text" class="form-control" id="trailerurl" name="trailerurl" required>
                </div>


                <div class="text-soleshead text-start">
                    <h5 class="fw-bold">Movie Formats</h5>
                </div>
                  <div class="form-check col-md-2">
                    <label class="form-check-label" for="2d"> 2D</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="2D" id="2d" name="2d">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="3d"> 3D</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="3D" id="3d" name="3d">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="imax3d"> IMAX 3D</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="IMAX 3D" id="imax3d" name="imax3d">
                </div>

                <div class="text-soleshead text-start">
                    <h5 class="fw-bold">Movie Languages</h5>
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="hindi"> Hindi</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Hindi" id="hindi" name="hindi">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="english"> English</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="English" id="english" name="english">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="tamil"> Tamil</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Tamil" id="tamil" name="tamil">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="telugu"> Telugu</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Telugu" id="telugu" name="telugu">
                </div>

                <div class="text-soleshead text-start">
                    <h5 class="fw-bold">Generes</h5>
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="action"> Action</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Action" id="action" name="action">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="suspense"> Suspense</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Suspense" id="suspense" name="suspense">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="thriller"> Thriller</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Thriller" id="thriller" name="thriller">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="romance"> Romance</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Romance" id="romance" name="romance">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="crime"> Crime</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Crime" id="crime" name="crime">
                </div>
                <div class="form-check col-md-2">
                    <label class="form-check-label" for="horror"> Horror</label>
                    <input class="form-check-input p-1 mx-1 form-control" type="checkbox" value="Horror" id="horror" name="horror">
                </div>

                <div class="col-12">
                    <button type="submit" class="btn bg-soledark text-soleshead fw-bold">Add Movie Details</button>
                </div>
            </form>
        </div>
    </main>
    <?php include '../assests/footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>