<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/boutstrap-5.2.3-dist/css/boutstrap.min.css">
        <title>Document</title>
</head>
<body>
        
       <form action="pages/connection.php" method="post">
       <h1>Formulaire d'inscription</h1>
            
            <label>Nom</label>
         <input type="text" name="nom" class=input1> <br><br>

            <label>Prénom</label>
         <input type="text" name="prenom" class=input2><br><br>

            <label>Date de naissance</label>
         <input type="date" name="date_de_naissance" class=input3><br><br>

            <label>Genre</label>
            <select name="genre" class=input5>
                 <option value="femme">femme</option>
                 <option value="homme" selected>homme</option><br><br>
            </select><br><br>

            <label>Date d'entrée à l'UFR/SDS</label>
         <input type="date" name="date_dentre"><br><br>

            <label>Email</label>
         <input type="email" name="email" class=input4> <br><br><br>

            <p>Personne a prevenir en cas de besoin</p>
            <label>Nom</label>
         <input type="text" name="nom_besoin" class=input6> <br><br>

            <label>Prénom</label>
         <input type="text" name="prenom_besoin" class=input7><br><br>
            <label>Numero de telephone</label>
         <input type="numero" name="numero_telephone" class=input8> <br><br>

            
            <input type="submit" value="Ajouter" class="ajouter">
        
            
       </form>

       
       
        <a href="liste.php"><p class="liste">consulter la liste</p></a>
</body>
</html>