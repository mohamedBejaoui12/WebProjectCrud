<?php
include 'fonction.php';
$conn=pdo_connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $sql = "INSERT INTO reservation (nom, prenom, email) VALUES (:nom, :prenom, :email)"; 

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':prenom', $prenom); 

    try {
        $stmt->execute();
        header('location:reservation.php');
    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
}
htmlHeader('HOME PAGE','','active','');
?>

<div class="container px-5 resCont">
        <h2 class="my-5">Add User</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom" required>
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="prenom" name="prenom" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <button type="submit" class="btn btn-primary" style="width: 100%;">ADD</button>
</form>

</div>

<?php
    
    htmlFooter();?>

