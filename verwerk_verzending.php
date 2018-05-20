<?php

// 0. uitlezen van POST-array
$subject = $_POST['subject'];
$message = $_POST['message'];

// 1. connectie maken met de database
$dbc = mysqli_connect('localhost', 'Valerie', '130781', '25333_db') or die ('Error connecting.');


// 2. kijken in de database en alle mailadressen tevoorschijn halen
$query = "SELECT mailadres FROM nieuwsbrief";
$result = mysqli_query($dbc,$query) or die ('Error querying.');


// 3. loopje waarin een bericht wordt verzonden naar alle mailadressen
while ($row = mysqli_fetch_array($result)) {
    echo 'Mail verzonden naar: ' . $row['mailadres'] . '<br>';
    // variabelen voor de mail
    $to = $row['mailadres'];
    $headers = 'From: 25333@ma-web.nl';
    // mail verzenden
    mail($to,$subject,$message,$headers);
}

echo 'Klaar met verzenden.';
