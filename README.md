# module-connexion
Descriptif du projet

création d'un module de connexion permettant aux utilisateurs de créer leur compte, de se connecter et de modifier leurs informations.
Pour commencer, création d'une base de données nommée “moduleconnexion” à l’aide dephpmyadmin. Dans cette bdd, puis création d'une table “utilisateurs” qui contient les champs suivants :

● id, int, clé primaire et Auto Incrément
● login, varchar de taille 255
● prenom, varchar de taille 255
● nom, varchar de taille 255
● password, varchar de taille 255

Création d'un utilisateur qui aura la possibilité d’accéder à l’ensemble des informations. Son login, prénom, nom et mot de passe sont “admin”.
Maintenant que la base de données est prête, création de différentes pages :

● Une page d’accueil qui présente votre site (index.php)
● Une page contenant un formulaire d’inscription (inscription.php) :Le formulaire doit contenir l’ensemble des champs présents dans la table
“utilisateurs” (sauf “id”) + une confirmation de mot de passe. Dès qu’un utilisateur remplit ce formulaire, les données sont insérées dans la base de
données et l’utilisateur est redirigé vers la page de connexion.
● Une page contenant un formulaire de connexion (connexion.php) : Le formulaire doit avoir deux inputs : “login” et “password”. Lorsque le formulaire
est validé, s’il existe un utilisateur en bdd correspondant à ces informations, alors l’utilisateur est considéré comme connecté et une (ou plusieurs) variables de
session sont créées.
● Une page permettant de modifier son profil (profil.php) : Cette page possède un formulaire permettant à l’utilisateur de modifier ses informations. Ce formulaire est par défaut pré-rempli avec les informations qui sont actuellement stockées en base de données.
● Une page d’administration (admin.php) : Cette page est accessible UNIQUEMENT pour l’utilisateur “admin”. Elle permet de lister l’ensemble des informations des utilisateurs présents dans la base de données.
Il va de soi que le site doit avoir une structure html correcte et un design soigné à l’aide de css. 
