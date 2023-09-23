<?php
$file = fopen('emails.csv', 'r');

while (($line = fgetcsv($file)) !== FALSE) {
    $name = $line[0];
    $email = $line[1];

    // Send email to $email using $name
}

fclose($file);
?>