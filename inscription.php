<?php
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

       <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white text-center">
                    <h3>Inscription</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom:</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom:</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="ok" class="btn btn-dark">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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