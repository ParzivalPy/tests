<?php

session_start();
require_once('../functions.php');

$postData = $_POST;
// Check if all required fields are filled
if (isset($postData['title'], $postData['ingredients'], $postData['instructions'])) {
    $title = $postData['title'];
    $ingredients = $postData['ingredients'];
    $instructions = $postData['instructions'];

    $conn = mysqli_connect("mysql-arthus.alwaysdata.net", "arthus", "!Bulldog44!700", "arthus_profils");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `recettes`(`title`, `ingredients`, `instructions`) VALUES ('$title','$ingredients','$instructions')";
    if (mysqli_query($conn, $sql)) {
        echo "Recette ajoutée avec succès";
    } else {
        echo ("Erreur : " . $sql . "<br>" . mysqli_error($conn));
        
    }
} else {
    echo "All fields are required.";
}

header('../recette/add_recipe.php');