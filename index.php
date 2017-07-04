<?php include('connect.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Colyseum</title>
    <link rel="stylesheet" href="style.css" type="text/CSS">
    <script src="jquery.js"></script>
</head>

<body>

<!-- Exercice 1 -->
<?php

$req = $bdd->query('SELECT * FROM clients');
while ($data = $req->fetch()){
    ?>

    <p>Nom et Prenom des Clients:<b><?php echo ($data->lastName); ?> <?php echo ($data->firstName); ?></b></p>

    <?php

}

?>

<!-- Exercice 2 -->

<?php

$req = $bdd->query('SELECT * FROM showTypes');
while ($data = $req->fetch()){
    ?>

    <p>Type de spectacles :<b><?php echo ($data->type); ?></b></p>

    <?php

}

?>

<!-- Exercice 3 -->

<?php

$req = $bdd->query('SELECT * FROM clients LIMIT 20');
while ($data = $req->fetch()){
    ?>
ffff
    <p>Nom et Prenom des Clients:<b><?php echo ($data->lastName); ?> <?php echo ($data->firstName); ?></b></p>

    <?php

}

?>

<!-- Exercice 4 -->

<?php

$req = $bdd->query('SELECT * FROM clients, cards WHERE cardTypesId = 1');
while ($data = $req->fetch()) {

    ?>
    <p>Clients avec carte de fidélité:<b><?php echo ($data->lastName); ?> <?php echo ($data->firstName); ?></b></p>
    <?php
}

?>

<!-- Exercice 5 -->

<?php

$req = $bdd->query('SELECT * FROM clients WHERE lastName LIKE "M%" ORDER BY lastName ASC');
while ($data = $req->fetch()){

    echo ('<p>Nom :'.($data->lastName).' Prenom : '.($data->firstName).'</p>');

}
?>

<!-- Exercice 6 -->

<?php

$req = $bdd->query('SELECT * FROM shows ORDER BY title ASC');
while ($data = $req->fetch()) {

    echo (($data->title).' par '.($data->performer).' , le '.($data->date).'</br>');

}

?>

<!-- Exercice 7 -->

<?php

$req = $bdd->query('SELECT * FROM clients JOIN cards ON clients.cardNumber = cards.cardNumber JOIN cardTypes ON cards.carTypesId = cardTypes.id
  CASE
  WHEN cardTypesId=1 THEN "oui" ELSE "NON"
  END');
while($data = $req->fetch()){

    echo ('<p>Nom :'.($data->lastName).' Prenom : '.($data->firstName).'</p>');

}
?>

</body>

</html>
