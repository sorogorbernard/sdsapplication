<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>liste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/boutstrap-5.2.3-dist/css/boutstrap.min.css">
</head>
<body>
   
<?php 
include('pages/header.php');
?> <br><br>

<section class="section">
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdsbase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connexion échouée: " . mysqli_connect_error());
}

// Récupération des données des étudiants
$sql = "SELECT * FROM sds";
$result = mysqli_query($conn, $sql);

// Affichage des données dans une table HTML
echo "<table cellspacing='5' border=2 BORDERCOLOR=#6666FF width=100% bg-primary align=center class='table-hover'>";
echo "<tr class='table'>
			<th>Nom</th> 
			<th>Prénom  </th> 
			<th>Date de naissance</th>
            <th>Genre  </th>
			<th>Date d'entrée</th>
            <th>Email</th>
            <th>Nom en cas de besoin</th>
            <th>Prénom </th>
            <th>Numero de telephone</th>
		</tr>";

if (mysqli_num_rows($result) > 0) {
    // Parcourir les lignes de données
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        		<td>" . $row["nom"] . "</td> 
        		<td>" . $row["prenom"] . "</td>
        		<td>" . $row["date_de_naissance"] . "</td> 
        		<td>" . $row["genre"] . "</td>
                <td>" . $row["date_dentre"] . "</td>
        		<td>" . $row["email"] . "</td>
        		<td>" . $row["nom_besoin"] . "</td>
        		<td>" . $row["prenom_besoin"] . "</td>
                <td>" . $row["numero_telephone"] . "</td>
        	  </tr>";
    }
}
 else {
    echo "0 résultats";
}

echo "</table>";

mysqli_close($conn);
?>

<a href="index.php"> <img class="flèche" src="images/fleche.png" alt="logo" title="retour"> </a>


</section> 
<?php 
include('pages/footer.php')
?>

</body>
</html>