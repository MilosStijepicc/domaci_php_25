<?php

    declare(strict_types=1);

    function setBio(string $name, string $lastName, int $age): string
    {
        return "My name is $name and last name is $lastName and I am $age years old.";
    }

    $message = setBio("Milos", "Stijepic", 19);
    echo $message;

?>