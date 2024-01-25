<header class="header ">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow fixed-top">
        <div class="container-fluid">
            <a href="/TicketUp" class="navbar-brand fs-3 fw-bold me-4 text-solesans">TicketUp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-bold" aria-current="page" href="/TicketUp">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-bold" href="/TicketUp/Movies">Movies</a>
                    </li>
                </ul>
                <form class="container-fluid mx-5 " action="/TicketUp/search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Movies, Format, Genres, Language" aria-label="SearchMovie" name="query" aria-describedby="Search_btn">
                        <button class="input-group-text btn bg-soledark text-solesans" id="Search_btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                <button class="btn bg-secondary text-light bg-opacity-25 text-nowrap mx-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#cityselector" aria-controls="offcanvasTop"><i class="fa-solid px-1 fa-city"></i><?php if (empty($_GET['city'])) {
                                                                                                                                                                                                                                            echo 'Select City';
                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                            echo $_GET['city'];
                                                                                                                                                                                                                                        } ?></button>
                <!--Backend here please-->
                <a class="btn btn-outline-secondary fw-bold border-0 text-light text-nowrap mx-1" data-bs-toggle="modal" data-bs-target="#signupmodal" href="/"><i class="fa-regular fa-circle-user px-1"></i> My Account</a>
                <!--URL MISSING-->

            </div>
        </div>

    </nav>
    <div class=" offcanvas offcanvas-top bg-soledark" tabindex="-1" id="cityselector" aria-labelledby="inputgr">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title mx-auto text-soleshead" id="offcanvasTopLabel">Select Your City</h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-secondary bg-opacity-25 rounded-4 container my-2 mx-auto">
            <div>
                <a href="/TicketUp/?city=Agra" class="text-solesans btn-outline-secondary fw-semibold btn m-1">Agra</a>;
                <?php
                $conn = mysqli_connect("localhost", "root", "", "ticketup");
                $sql = "SELECT * FROM all_cities";
                $data = $conn->query($sql);
                foreach ($data as $a) {
                    echo '<a href="/TicketUp/?city='. $a["city_name"] .'" class="text-solesans btn-outline-secondary fw-semibold btn m-1">'. $a["city_name"] .'</a>';
                }
                ?>
            </div>
        </div>
    </div>
    <!--Login Modal -->
    <div class="modal fade " id="loginmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-dark">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="./loggedin.php" method="post">
                        <!-- Action Missing -->
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light fw-bold" id="basic-addon1">Email</span>
                            <select class="form-select" id="inputLogin" name="login-type">
                                <option value="user" selected>User</option>
                                <option value="cinema">Cinema Owner</option>
                                <option value="admin">Admin</option>
                            </select>
                            <input type="email" class="form-control" aria-label="email input with dropdown button" name="email" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light fw-bold" id="basic-addon1">Password</span>
                            <input type="password" class="form-control" aria-label="Username" name="password" required aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" class="btn btn-dark fw-bold col-4">Login</button>
                    </form>
                </div>
                <div class="text-center">
                    <p>New to TicketUp ?<span class="  btn text-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">Signup</span></p>
                </div>
            </div>
        </div>
    </div>
    <!-- signup modal -->
    <div class="modal fade " id="signupmodal" tabindex="-1" aria-labelledby="SignupModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-soledark">
                <div class="modal-header">
                    <h4 class="modal-title text-soleshead fw-bold" id="SignupModalLabel">Signup</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                <form class="row g-3 p-1 text-solesans " method="get" action="/TicketUp/assests/signin"> <!-- to br post -->
                <div class="container shadow-sm bg-secondary bg-opacity-25 rounded-2 p-3">
                <div class="col-md-12">
                    <label for="mobile" class="form-label">Enter Mobile Number</label>
                    <input type="number" class="form-control" id="mobile" name="mobile" required>
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" class="btn bg-soledark text-soleshead fw-bold">Send OTP</button>
                </div>
                </div>
            </form>
                </div>
                <div class="text-center">
                    <p class="text-solesans">Already using TicketUp ?<span class="btn text-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</span></p>
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    .offcanvas {
        --bs-offcanvas-height: 80vh !important;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .form-control {
        background-color: #191c24 !important;
        border: none;
        color: #a6becd;
    }

    .form-control:focus {
        color: #a6becd;
        box-shadow: 0 0 5px 0px black;
    }
</style>