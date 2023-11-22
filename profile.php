<?php
 include 'connexion.php';
 session_start();

if (!isset($_SESSION['id_profil'])) {
   
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">



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



        <?php
           $id=$_SESSION['id_profil'];
                $query = "SELECT * FROM `profil` where id_profil = $id ";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) { ?>


                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <img src="path/to/user/image.jpg" class="card-img-top" alt="User Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $user_name; ?></h5>
                                    <p class="card-text">User ID: <?php echo $user_id; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                        </div>
                    </div>
            <?php } ?>

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="path/to/user/image.jpg" class="card-img-top" alt="User Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $user_name; ?></h5>
                                <p class="card-text">User ID: <?php echo $user_id; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
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