

<?php
include 'connexion.php';
if(isset($_POST['ok'])) {

    $id = $_GET['id']; 
    $nom = $_POST['first'];
    $prenom = $_POST['last'];
    $tele = $_POST['number'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];

    $sql = "UPDATE contact SET nom='$nom', prenom='$prenom', tele='$tele', email='$email', adresse='$adresse' WHERE id_contact=$id";
    mysqli_query($conn, $sql)
 
}
?>
