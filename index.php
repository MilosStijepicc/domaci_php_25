<?php

    declare(strict_types=1);

    $name = "Marko";

    if($name === "Milos"){
        echo "Hello Milos";
    }
    else{
        echo "Nije Milos";
    }

    echo $name === "Milos" ? "Hello Milos" : "Nije Milos";

    function isLegalAge(int $age): bool
    {
        return $age >= 18;
    }

    if(isLegalAge(2)){
        die("Imate dovoljno godina");
    }
    else{
        die("Nemate dovoljno godina");
    }

?>