<?php
 include 'connexion.php';
 session_start();
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
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between">
                <div class="container d-flex justify-content-between ">
                    <a class="navbar-brand" href="#"><span>You</span>Contact</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div>
                        <button type="button" class="btn btn-dark"><a href="inscription.php">login</a></button>
                    </div>

                </div>
            </nav>
        </header>

        <form action="" method="post">
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required><br>

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
if (isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pwd = MD5($_POST["password"]);
    $date_creation = date('Y-m-d');

    $sql = "INSERT INTO profil (nom, prenom, pwd, date_creation) VALUES ('$nom', '$prenom', '$pwd', '$date_creation')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        $id_profil = mysqli_insert_id($conn);

        $_SESSION['id_profil'] = $id_profil;

        header("Location: login.php");
        exit();
    } else {
        echo "Erreur lors de l'inscription : " . mysqli_error($conn);
    }
}
?>