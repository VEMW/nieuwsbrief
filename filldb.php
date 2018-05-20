<?php
$dbc = mysqli_connect('localhost', 'Valerie', '130781', '25333_db') or die ('Error connecting.');
$voornaam = 'Test';
$tussenvoegsel = 'de';
$achternaam = 'Database';
$mailadres = 'zomaar@niks.nl';
$query = "INSERT INTO nieuwsbrief VALUES (0,'$voornaam', '$tussenvoegsel', '$achternaam', '$mailadres')";


for ($i = 0 ; $i < 10 ; $i ++) {
    $result = mysqli_query($dbc,$query) or die ('Error querying.');

}