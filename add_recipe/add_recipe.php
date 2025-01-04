<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_add_recipe.css">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <?php require_once("../header.php"); ?>
    <div class="page">
        <form action="submit_add_recipe.php" method="POST">
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" autofocus required>
            <br>
            <label for="ingredients">Ingredients :</label><br>
            <textarea wrap="soft" id="ingredients" name="ingredients" required></textarea>
            <br>
            <label for="instructions">Instructions :</label><br>
            <textarea wrap="soft" id="instructions" name="instructions" required></textarea>
            <br>
            <input type="submit" id="submit" value="Ajouter la recette"></input>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var textareas = document.querySelectorAll('textarea');

            textareas.forEach(function (textarea) {
                textarea.style.height = 'auto';
                textarea.style.height = (textarea.scrollHeight) + 'px';

                textarea.addEventListener('input', function () {
                    textarea.style.height = 'auto';
                    textarea.style.height = (textarea.scrollHeight) + 'px';
                });
            });
        });
    </script>
    <script src="../script.js"></script>
</body>

</html>