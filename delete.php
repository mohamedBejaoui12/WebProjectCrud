<?php
include "fonction.php";
$conn = pdo_connect();

if(isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    
    // Fetch the user's nom and prenom
    $sql_select = "SELECT nom, prenom FROM reservation WHERE id = ?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->execute([$delete_id]);
    $row = $stmt_select->fetch(PDO::FETCH_ASSOC);
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    
    // Display confirmation dialog with JavaScript
    echo "<script>
            var confirmDelete = confirm('Are you sure you want to delete the user: $nom $prenom?');
            if(confirmDelete) {
                window.location.href = 'confirmD.php?delete_id=$delete_id';
            } else {
                window.location.href = 'reservation.php';
            }
          </script>";
    
    exit();
} else {
    header("Location: reservation.php"); 
    exit();
}
?>
