<?php
include 'connexion.php';


$id = $_SESSION['id_profil'];
$query = "SELECT * FROM `contact` WHERE id_profil = $id";
$result = mysqli_query($conn, $query);


header('Content-Type: application/xls');
header('Content-Disposition: attachment; filename=contact_list.xls');

echo '<table border="1">';
echo '<tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
     </tr>';

while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>
            <td>' . $row["nom"] . '</td>
            <td>' . $row["prenom"] . '</td>
            <td>' . $row["tele"] . '</td>
            <td>' . $row["email"] . '</td>
            <td>' . $row["adresse"] . '</td>
         </tr>';
}

echo '</table>';
?>
