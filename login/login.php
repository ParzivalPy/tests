<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuisine - Profil</title>
    <link href="../style.css" rel="stylesheet" type="text/css" />
    <link href="style_login.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php require_once("../header.php"); ?>
    <div class="page">
        <?php if (!isset($_SESSION['LOGGED_USER'])): ?>
            <form action="submit_login.php" method="POST">
                <!-- si message d'erreur on l'affiche -->
                <?php if (isset($_SESSION['LOGIN_ERROR_MESSAGE'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION['LOGIN_ERROR_MESSAGE'];
                        unset($_SESSION['LOGIN_ERROR_MESSAGE']); ?>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help"
                        placeholder="you@exemple.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" required class="form-control" id="password" name="password">
                </div>
                <p>Pas de compte ?<br><a href="../register/register.php">Inscrivez-vous...</a></p>
                <input type="submit" id="submit">
            </form>
        <?php else: ?>
            <div>
                Nom : <?php echo $_SESSION['LOGGED_USER']['last_name']; ?>
                <?php echo $_SESSION['LOGGED_USER']['first_name'] ?>
                <br />
                Email : <?php echo $_SESSION['LOGGED_USER']['email']; ?>
                <br />
                <a href="logout.php">Déconnexion</a>
            </div>
        <?php endif; ?>
    </div>
    <script src="../script.js"></script>
</body>

</html>