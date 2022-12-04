<!DOCTYPE html>
<html lang="fr">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/admin.css"  />
        <title>admin</title>



<!-- header des pages -->
    <?php
        include 'header.php';
        include 'connect.php';
      
    ?>

    <!-- contenu de la page -->
    <main>
        <div class="container">

            <div class="table_admin">
            <div class=titre>
                Administrateur
            </div>
                <h2>La liste des utilisateurs</h2>
                <table>

                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nom d'utilisateur</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $request = "SELECT * FROM utilisateurs";
                            $exec_request = $connect -> query($request);
                            while(($result = $exec_request -> fetch_assoc()) != null)
                            {
                                echo "<tr>";
                                echo "<td>".$result['id']."</td>";
                                echo "<td>".$result['login']."</td>";
                                echo "<td>".$result['prenom']."</td>";
                                echo "<td>".$result['nom']."</td>";
                                echo "<td>".$result['password']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- footer des pages -->
    <?php
        include 'footer.php';
    ?>
</body>
</html>