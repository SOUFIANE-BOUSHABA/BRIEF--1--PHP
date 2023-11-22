<?php
session_start();
include 'connexion.php';

if (!isset($_SESSION['id_profil'])) {
    header("Location: login.php");
}

$id = $_SESSION['id_profil'];
$query = "SELECT * FROM `profil` WHERE id_profil = $id ";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/typed.js@2.0.12">
</head>

<body>
    <main>
        <?php include "header.php" ?>
        <div class="container d-flex mt-5">
            <div class="col  d-flex justify-content-center align-items-center">
                <?php
                if ($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    ?>
                <div class="col-md-10">
                    <div class="opacity-50">
                        <!-- <img src="path/to/user/image.jpg" class="card-img-top"> -->
                        <div class="card-body">
                            <h2 class="d-flex" style="font-size:40px; font-weight:bold">Hi ,  <p class="card-title"></p></h2>

                            <p class="card-text" style="opacity:.6">your ID: <?php echo $row['id_profil']; ?></p>
                            <p class="card-text" style="opacity:.6"> creation: <?php echo $row['date_creation']; ?></p>

                            <div class="card-text" style="opacity:.6">Last Online:
                                <?php echo date('H:i', strtotime($row['last_online'])) ?></div>
                        </div>
                    </div>
                </div>
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var element = document.querySelector('.card-title');


                    var firstName = "<?php echo $row['prenom']; ?>";
                    var lastName = "<?php echo $row['nom']; ?>";

                    var fullName = firstName + ' ' + lastName;
                    var options = {
                        strings: [fullName],
                        typeSpeed: 50,
                        backSpeed: 25,
                        loop: true, 
                        backDelay: 2000,
                        showCursor: false,
                    };

                    var typed = new Typed(element, options);
                });
                </script>
                <?php
                }
                ?>
            </div>

            <div class="col ">
                <img src="./img/imgg1.png" alt="" style="width:700px;">
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>