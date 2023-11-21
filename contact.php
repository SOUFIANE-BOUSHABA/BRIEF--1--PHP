<?php  require 'connexion.php' ?>


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
                        <button type="button" class="btn btn-dark">login</button>
                    </div>

                </div>
            </nav>
        </header>

        <section class="" style="margin-top:100px">
            <div class="container d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    add contact
                </button>



                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">add contact</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="mb-3 d-flex gap-2">

                                        <input type="text" class="form-control" id="" name="first"
                                            aria-describedby="emailHelp" placeholder="first name">
                                        <input type="text" class="form-control" id="" name="last"
                                            aria-describedby="emailHelp" placeholder="last name">

                                    </div>
                                    <div class="mb-3 d-flex gap-2">

                                        <input type="text" class="form-control" id="" name="number"
                                            aria-describedby="emailHelp" placeholder="0676767676">
                                        <input type="email" class="form-control" id="" name="email"
                                            aria-describedby="emailHelp" placeholder="email">

                                    </div>
                                    <div class="mb-3">

                                        <input type="text" name="adresse" class="form-control" id="adresse" placeholder="adresse">
                                    </div>

                                    <input type="submit" name="ok" class="btn btn-primary" value="submit">
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <table class="table container">
                <thead>
                    <tr>
                        <th scope="col">photo</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">tele</th>
                        <th scope="col">email</th>
                        <th scope="col">adress</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>img</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td class="d-flex gap-3 pb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd"
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil" viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                        </td>
                    </tr>

                </tbody>
            </table>

        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
if(isset($_POST['ok'])){

  $name=$_POST['first'];
  $last=$_POST['last'];
  $tele=$_POST['number'];
  $email=$_POST['email'];
  $adress=$_POST['adresse'];
  $date=date('Y-m-d');
  $idprofil=1;
  
}
$sql="INSERT INTO `contact`(`id_contact`, `nom`, `prenom`, `tele`, `email`, `adresse`, `date_creation`, `id_profil`) 
VALUES (NULL,$name,$last,$tele,$email,$adress,'2000-01-01',$idprofil)";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>