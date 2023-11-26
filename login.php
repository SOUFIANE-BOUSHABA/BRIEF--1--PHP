


<?php
include 'connexion.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body >
    <?php
    include 'header.php';
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom:</label>
                                <input type="text" class="form-control" id="nom" name="nom" required>
                                <span id='nameerr'></span>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <span id='passerr'></span>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="ok" class="btn btn-dark">Se connecter</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                        <p>Pas encore de compte? <a href="inscription.php">Créer un compte</a></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');

            form.addEventListener('submit', function (event) {
                if (!validateForm()) {
                    event.preventDefault();
                }
            });

            function validateForm() {
                const nom = document.getElementById('nom').value.trim();
                const password = document.getElementById('password').value.trim();

                const nameRegex = /^[a-zA-Z]+$/; 
                const passwordRegex = /^(?=.*\d)(?=.*[a-zA-Z]).{6,}$/;

                if (!nameRegex.test(nom)) {
                   let tes = document.getElementById('nameerr');
                   tes.innerHTML='Nom doit contenir seulement des lettres';
                  tes.style.color='red';
                    return false;
                }
                
                if (!passwordRegex.test(password)) {
                    let tes = document.getElementById('passerr');
                   tes.innerHTML=' 6 caractères avec au moins une lettre et un chiffre';
                  tes.style.color='red';
                  
                    return false;
                }

                return true; 
            }
        });
    </script>
</body>

</html>

<?php
if (isset($_POST["ok"])) {
    $name = $_POST["nom"];
    $pwd = MD5($_POST["password"]);
 echo $pwd;
    $sql = "SELECT * FROM profil WHERE nom='$name' and pwd= '$pwd'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        header("Location: inscription.php");
        exit();
    } else {
        if ($result->num_rows > 0) {
            $user = mysqli_fetch_assoc($result);

                $_SESSION['id_profil'] = $user["id_profil"];
                header("Location: profile.php");
            
        } else {
            echo "User not found";
        }
    }
}
?>
