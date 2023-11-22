<?php
     session_start();
     include 'connexion.php';
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <main>
    <?php include "header.php"; ?>

        <form action="" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br>


            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" name="ok" value="inscrire">
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>

<?php

if(isset($_POST["ok"])){
    $name = $_POST["nom"];
    $pwd = MD5($_POST["password"]);
    echo $name  , $pwd ;
    $sql = "SELECT * FROM profil WHERE nom='$name' AND pwd ='$pwd'";
    $res=mysqli_query($conn, $sql);
    if(!$res) {
        header("Location: inscription.php");
    } else {
        if($res->num_rows > 0){
            $user = mysqli_fetch_assoc($res);
            $_SESSION['id_profil'] = $user["id_profil"];
            header("Location: profile.php");
            exit();

        }
    }
}

?>