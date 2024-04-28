<?php
include "fonction.php";
$conn=pdo_connect();


if(isset($_GET['update_id'])) {
    $update_id = $_GET['update_id'];
    $sql_select = "SELECT * FROM reservation WHERE id = ?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->execute([$update_id]);
    $row = $stmt_select->fetch(PDO::FETCH_ASSOC);
    
    
    if(isset($_POST['update'])) {
        
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        
    
        $sql_update = "UPDATE reservation SET nom=?, prenom=?, email=? WHERE id=?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->execute([$nom, $prenom, $email, $update_id]);
        
      
        header("Location: reservation.php"); 
        exit();
    }
    htmlHeader('HOME PAGE','','active','');
    
 
    ?>
    
        <div class="container px-5 resCont">
            <h2 class="my-5">Update User</h2>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom:</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $row['nom']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom:</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $row['prenom']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                </div>
                
                <input type="submit" name="update" value="Update" class="btn btn-primary" style="width: 100%;">
            </form>
        </div>
    <?php
    exit();
} else {
    
    header("Location: reservation.php"); 
    exit();
}
?>
  <?php
    
    htmlFooter();?>
