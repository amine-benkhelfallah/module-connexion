
<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscription.css"  />
    <title>Formulaire de connexion </title>
</head>
<body>       
   <!-- header  -->
   <?php include('header.php'); ?>

    <!--Page de connexion  -->
    <main>
        <div class="box">
            <div id="container">
            <form action="check.php" method="post">
                <h1>Connexion</h1>
                    <label for="login"><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" required>
                    <label for="password"><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                    <input type="submit"  value="login" >
                </form>
                <?php
                    if(isset($_GET['erreur'])){
                        $err = $_GET['erreur'];
                        if($err==1 || $err==2)
                            echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }              
                ?>          
            </div>
        </div>
    </main>
    <!-- footer -->
    <?php include('footer.php'); ?>
</body>
</html>
    

