<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/inscription.css"  />
        <title>Inscription</title>
    </head> 

    <body>
    <?php include('header.php'); 
          include('connect.php'); 
    ?> 


    <main>

        <div class="box">
            <div id="container">
            <!-- zone d'inscription -->
            <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1){
                            echo "<p style='color:red'>Utilisateur déjà créé</p>";
                        }
                        if($err==2){
                            echo "<p style='color:red'>Mot de passe différent</p>";
                        }
                    }
                ?>
            <form action="inscription.php" method="POST"> 
                <h1>Inscription</h1> 
                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Saisissez un nom d'utilisateur" name="login" required>

                    <label><b>Prenom</b></label>
                    <input type="text" placeholder="Saisissez votre Prenom" name="prenom" required>

                    <label><b>Nom</b></label>
                    <input type="text" placeholder="Saisissez votre Nom" name="nom" required>

                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Saisissez un mot de passe" name="password" required>

                    <label><b>Confirmez le mot de passe</b></label>
                    <input type="password" placeholder="Confirmation du mot de passe" name="password2" required>

                    <input type="submit" name="submit" value='Creer' >
                </form>
                <?php
            if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['prenom'])){
                $login = $_POST['login'];
                $password = $_POST['password'];
                $password2 = $_POST['password2'];
                $prenom = $_POST['prenom'];
                $nom = $_POST['nom'];

                if($login !== "" && $password !== "" && $password2 !== "" && $prenom !== "" && $nom !== ""){
                    if($password == $password2){
                        $requete = "SELECT count(*) FROM utilisateurs where login = '".$login."'";
                        $exec_requete = $connect -> query($requete);
                        $reponse      = mysqli_fetch_array($exec_requete);
                        $count = $reponse['count(*)'];

                        if($count==0){
                            $password = password_hash($password, PASSWORD_BCRYPT);
                            $requete = "INSERT INTO utilisateurs (login, prenom, nom, password) VALUES ('".$login."', '".$prenom."', '".$nom."', '".($password)."')";
                            $exec_requete = $connect -> query($requete);
                            header('Location: connexion.php');
                        }
                        else{// utilisateur déjà existant
                            header('Location: inscription.php?erreur=1'); 
                        }
                    }
                    else{// mot de passe différent
                        header('Location: inscription.php?erreur=2'); 
                    }
                }
            
            }

            mysqli_close($connect); // fermer la connexion
        ?>
 
    </main>
    <!-- footer des pages -->
    <?php include('footer.php'); ?>
    </body>
</html>