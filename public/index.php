<?php  require_once("../ressources/config.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ide-Parc</title>
</head>
<body>
    <div class="add-emp">
        <h3>ajouter un employé</h3>
        <form action="/" methode="POST">
        <input type="text" name="fName" placeholder="nom" required eutofocus>
        <br>
        <br>
        <input type="text" name="lName" placeholder="prénom" required>
        <br>
        <br>
        <input type="date" name="dob" required>
        <br>
        <br>
        <input type="text" name="addres" placeholder="address" required>
        <br>
        <br>
        <input type="email" name="email" placeholder="email" required>
        <br>
        <br>
        <input type="text" name="category" placeholder="category" required>
        <br>
        <br>
        <button type="submit">ajouter</button>
        </form>
    </div>
    <!--Display employies -->
    <?php
        get_employies();
    ?>
    
</body>
</html>