<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TicketUp</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </head>

<body class="bg-soledark">
    <main class="main container-fluid ">
      <div class="container ticket-info text-center my-2">
        <?php
        echo '<div class="fw-bold fs-5 text-soleshead">'.$_GET["moviename"].' - '.$_GET["showformat"].'</div> 
        <div class="fw-bold text-soleshead">'.$_GET["showtime"].' | '.$_GET["cinema"].' | '.$_GET["cityname"].'</div>'
        ?>
        <span class="next-btn">
        <a href="..........." class=""><i class="fa-solid fa-circle-right px-1 fs-1 text-light"></i></a>
        </span>
      </div>
        <div class="screen-box-outer d-flex align-items-center justify-content-center" >
            <div class="screen-box-inner d-flex align-items-center justify-content-center mt-1 p-2 rounded-2">
                <img class="screen-img rounded-2 " src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1ppc5H83Khd8AzQJwEp9DUZo2XIRm4tra_e788mZNbRdL-occjhYzSSs46Xt6Nu6AIA&usqp=CAU" alt=" @ @ @ ">
            </div>
        </div>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "ticketup");
        $sql = "SELECT * FROM ticketupcinemas WHERE CinemaName='$_GET[cinema]' AND city='$_GET[cityname]'";
        $data = $conn->query($sql);
        foreach ($data as $fetch) {
        ?>
            <?php
            // Silver ---->
            echo  '<div class="seating-plan text-center"> <div class="silver">
            <div class="seat-announce fs-5 text-light fw-bold mb-5">SILVER ' . $fetch["silver-price"] . ' RS</div>';
            for ($row_silver = 1; $row_silver <= $fetch["rows-in-silver"]; $row_silver++) {
                echo '<div>';
                for ($col_silver = 1; $col_silver <= ($fetch["cols-in-silver"]); $col_silver++) {
                    if ($col_silver == ($fetch["cols-in-silver"] / 2) + 1) {
                        echo  '<span class="invisible" id="s' . $row_silver ."-". $col_silver . '">
                            <div class="seat" style="width: ' . (26 + $row_silver) . 'px;height: ' . (37 + $row_silver) . 'px;"></div></span>';
                    }
                    echo  '<span class="" id="s' . $row_silver ."-". $col_silver . '">
                    <div class="seat" style="width: ' . (26 + $row_silver) . 'px;height: ' . (37 + $row_silver) . 'px;"></div></span>';
                }
                echo '</div>';
            }
            echo '</div></div>';
            // Gold ---->
            echo  '<div class="seating-plan text-center"> <div class="silver">
            <div class="seat-announce fs-5 text-light fw-bold mb-5">GOLD ' . $fetch["gold-price"] . ' RS</div>';
            for ($row_gold = 1; $row_gold <= $fetch["rows-in-gold"]; $row_gold++) {
                echo '<div>';
                for ($col_gold = 1; $col_gold <= $fetch["cols-in-gold"]; $col_gold++) {
                    if ($col_gold == ($fetch["cols-in-gold"] / 2) + 1) {
                        echo  '<span class="invisible" id="g' . $row_gold ."-". $col_gold . '">
                        <div class="seat" style="width: ' . (26 + $row_silver) . 'px;height: ' . (37 + $row_silver) . 'px;"></div></span>';
                    }
                    echo  '<span class="" id="g' . $row_gold ."-". $col_gold . '">
                    
                    <div class="seat" style="width: ' . (31 + $row_gold) . 'px;height: ' . (40 + $row_gold) . 'px;"></div></span>';
                }
                echo '</div>';
            }
            echo '</div></div>';
            // Platinum ---->
            echo  '<div class="seating-plan text-center"> <div class="silver">
            <div class="seat-announce fs-5 text-light fw-bold mb-5">PLATINUM ' . $fetch["platinum-price"] . ' RS</div>';
            for ($row_platinum = 1; $row_platinum <= $fetch["rows-in-platinum"]; $row_platinum++) {
                echo '<div>';
                for ($col_platinum = 1; $col_platinum <= $fetch["cols-in-platinum"]; $col_platinum++) {
                    echo  '<span class="" id="p' . $row_platinum ."-". $col_platinum . '">
                    <div class="seat" style="width: ' . (35 + $row_platinum) . 'px;height: ' . (44 + $row_platinum) . 'px;"></div></span>';
                }
                echo '</div>';
            }
            echo '</div></div>';
            ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<?php }
        $conn->close();
?>
<script>
$(document).ready(function(){
  $(".seat").click(function(){
    $(".seat").toggleClass("seat-clicked");
  });
});
</script>
</body>

</html>