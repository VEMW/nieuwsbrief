<?php
$id = $_GET['id'];
$dbc = mysqli_connect('localhost', 'Valerie', '130781', '25333_db') or die ('Error connecting.');
$query = "DELETE FROM nieuwsbrief WHERE id = '$id'";
$result = mysqli_query($dbc,$query) or die ('Error querying.');
header( "Location: beheren.php");