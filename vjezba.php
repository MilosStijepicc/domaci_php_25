<?php

    $age = 19;
    $name = "Milos";

    echo $name === "Milos" && $age >= 18 ? "Dobrodosli nazad" : "Niste dobrodosli";

    //http://localhost/predavanje_25/vjezba.php?city=Belgrade

    //if(isset($_GET['city'])){
       // $cityName = $_GET['city'];
    // }

    $cityName = $_GET['city'] ?? "London";

    $countryName = $_GET['country'] ?? "England";

    echo $cityName;
    echo $countryName;

?>