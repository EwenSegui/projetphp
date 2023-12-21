<h1>Contact</h1>

<!-- 
cree un formulaire method poste envoyer 
vers la route page=getContact 
qui appel le fichier view/getContact.php 
et afficher les informations recuperées

nom
prenom
email
mdp

envoyer
 -->

<form action="index.php?page=getContact" method="post">
    nom : <input type="text" name="nom"> <br>
    prenom : <input type="text" name="prenom"><br>
    email : <input type="email" name="email"><br>
    mot de passe : <input type="password" name="mdp"><br>
    <button>Envoyer</button>

</form>