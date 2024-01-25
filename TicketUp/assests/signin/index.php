<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Movie Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>.bg-soledark {
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
        .main {
        margin-top: 5rem;
        }
        footer{
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }
</style>
</head>

<body class="bg-soledark">
    <?php include '../header.php' ?>
    <?php
        // require('textlocal.class.php');

        // $textlocal = new Textlocal(false, false,'NWEzNjc3NzQ3MDQyNDg3NDYxNmQ3MzZmNmI2Mzc2NzE='	);

        // $numbers = array($_GET["mobile"]);
        // $sender = 'TXTLCL';
        // $otp = mt_rand(100000,999999);
        // $message = 'Hello '.$_GET['mobile'].'Your OTP for SignUp on TicketUp is : '.$otp;

        // try {
        //     $result = $textlocal->sendSms($numbers, $message, $sender);
        //     setcookie('otp',$otp);
        //     print_r($result);
        //     echo("OTP sent Successfully!! ");
        // } catch (Exception $e) {
        //     die('Error: ' . $e->getMessage());
        // }

        // if(isset($_POST('verifyotp'))){
        //     $otp = $_POST('signupotp');
        //     if($_COOKIE['otp']==$otp){
        //         echo "OTP Verified Successfully!! ";
        //     }
        //     else{
        //         echo "Please enter correct OTP";
        //     }
        // }

        $otp = mt_rand(100000,999999);
        $fields = array(
            "message" => 'Hello '.$_GET['mobile'].'Your OTP for SignUp on TicketUp is : '.$otp,
            "language" => "english",
            "route" => "q",
            "numbers" => $_GET['mobile'],
        );
        
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($fields),
          CURLOPT_HTTPHEADER => array(
            "authorization: gCmYQHWbpoUT6hdNIOLGjBa8l79x20V5ezu3wicPkqFZrXnKtJO0K4CWEVrBTFyamnv5P2AUNQhIfquc",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
          setcookie('otp',$otp);
          echo("OTP sent Successfully!! ");
        }



        // if(isset($_POST('verifyotp'))){
        //     $otp = $_POST('signupotp');
        //     if($_COOKIE['otp']==$otp){
        //         echo "OTP Verified Successfully!! ";
        //     }
        //     else{
        //         echo "Please enter correct OTP";
        //     }
        // }


    ?>

    <main class="main">
        <div class="container">
        <form class="row g-3 p-1 text-solesans col-6 mx-auto my-1" method="post" action="./assests/signin">
            <div class="container shadow-sm bg-secondary bg-opacity-25 rounded-2 p-3">
                <div class="col-md-12">
                    <label for="CinemaName" class="form-label">Enter OTP sent to your Mobile Number <i class="fw-bold"><?php echo $_GET["mobile"]; ?></i></label> <!--TO BE POST-->
                    <input type="text" class="form-control" id="signupotp" name="signupotp" required> 
                </div>
                <div class="col-12 mt-3">
                    <button type="submit" name="verifyotp"class="btn bg-soledark text-soleshead fw-bold">Verify OTP &y SignUp</button>
                </div>
            </div>
        </form>
        </div>
    </main>
    <?php include '../footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>