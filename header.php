<?php

 
$isLoggedIn = isset($_SESSION['id_profil']);
 
if (isset($_GET['logout'])) {

    $updateQuery = "UPDATE `profil` SET last_online = NOW() WHERE id_profil = $id";
    mysqli_query($conn, $updateQuery);
    
    session_destroy();
    header("Location: login.php");
}
?>

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
                <?php
                if ($isLoggedIn) {
                    echo '<div class="btn-group">
                            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="profile.php">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="contact.php">Contact </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="?logout">Logout</a></li>
                            </ul>
                        </div>';
                } else {
                    echo '<button type="button" class="btn btn-dark"><a href="login.php">login</a></button>';
                }
                ?>
            </div>
        </div>
    </nav>
</header>
