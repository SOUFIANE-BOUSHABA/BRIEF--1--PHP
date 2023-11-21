<?php
 include 'connexion.php';


 if(isset($_GET['id'])) {
    $contactId = $_GET['id'];

    $sql = "DELETE FROM contact WHERE id_contact = $contactId";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

} 
header("Location: contact.php");
?>
