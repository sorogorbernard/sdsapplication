<!DOCTYPE html>
<html>
 
<head>
    <title>connection</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/boutstrap-5.2.3-dist/css/boutstrap.min.css">
</head>
 
<body>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect('localhost', 'root', '', 'sdsbase');
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 9 values from the form data(input)
        $nom =  $_REQUEST['nom'];
        $prenom = $_REQUEST['prenom'];
        $date_de_naissance =  $_REQUEST['date_de_naissance'];
        $genre =  $_REQUEST['genre'];
        $date_dentre = $_REQUEST['date_dentre'];
        $email =  $_REQUEST['email'];
       $nom_besoin = $_REQUEST['nom_besoin'];
       $prenom_besoin = $_REQUEST['prenom_besoin'];
       $numero_telephone = $_REQUEST['numero_telephone'];
         
        // Performing insert query execution
        // here our table name is sds
        $sql = "INSERT INTO sds(nom, prenom, date_de_naissance, genre, date_dentre, email, nom_besoin, prenom_besoin, numero_telephone) VALUES('$nom','$prenom','$date_de_naissance','$genre','$date_dentre','$email','$nom_besoin','$prenom_besoin','$numero_telephone')";
         
         if(mysqli_query($conn, $sql)){
            echo nl2br("<h3>enregistrement réussit</h3> </br> <a href='../index.php'> <img class='flèche' src='../images/fleche.png' alt='logo' title='retour'> </a>");
 
            // echo nl2br("\n$nom\n $prenom\n $date_de_naissance\n $genre\n $date_dentre\n $email\n $nom_besoin\n $prenom_besoin\n $contact");
        } else{
            echo "echec d'enregistrement $sql. " 
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
</body>
 
</html>