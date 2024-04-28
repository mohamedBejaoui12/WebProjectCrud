<?php
    include 'fonction.php';
    htmlHeader('HOME PAGE','','active','');
    $conn=pdo_connect();
    $limit = 5; 
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit; 


$sql = "SELECT * FROM reservation LIMIT $start, $limit";
$stmt = $conn->query($sql);


$total_records = $conn->query("SELECT count(*) as total FROM reservation")->fetch()['total'];
$total_pages = ceil($total_records / $limit); 


    ?>



<div class="container mt-5">
    <div class="d-flex justify-content-center align-items-center mt-5">
        <p>Pour ajouter une nouvelle réservation, cliquez sur le bouton :</p>
    </div>
    
<a href="addUser.php" class="d-flex justify-content-center align-items-center"><button class="btn btn-lg btn-primary mb-5" style="width: 30%;text-decoration: none;">Ajout Reservation</button></a>
<table class="table">
<caption style="text-align: center;">Toute Les Reservation Enregistree</caption>
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOM</th>
      <th scope="col">EMAIL</th>
      <th scope="col">CONTROL</th>
    </tr>
  </thead>
 
  <tbody>
    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
        <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                <a href="update.php?update_id=<?php echo $row['id']; ?>"><button class="btn btn-success">Modifier</button></a>
                <a href="delete.php?delete_id=<?php echo $row['id']; ?>"><button class="btn btn-danger">supprimer</button></a></td>
            </tr>
        <?php } ?>
   
  </tbody>
</table>
</div>
<?php if ($total_pages > 1): ?>
        <div class="d-flex justify-content-center align-items-center">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo ($page - 1); ?>" class="mx-2" style='text-decoration: none;'><i class="fa-solid fa-arrow-left"></i></a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>" class="mx-2" style='text-decoration: none;' <?php if ($page == $i) echo 'style="font-weight:bold"'; ?>><?php echo $i; ?></a>
            <?php endfor; ?>
            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo ($page + 1); ?>" class="mx-2" style='text-decoration: none;'><i class="fa-solid fa-arrow-right"></i></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php
    
    htmlFooter();?>

