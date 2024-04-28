<?php
    include 'fonction.php';
    htmlHeader('HOME PAGE','active','','');
?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">Bienvenue à notre service de réservation</h2>
            <p>Nous vous offrons la possibilité de réserver votre place avec facilité et rapidité. Profitez de notre service convivial pour planifier vos prochaines sorties en toute tranquillité.</p>
            <p>Découvrez nos offres spéciales et nos promotions exclusives pour rendre votre expérience encore plus agréable.</p>
            <a href="reservation.php" class="btn btn-primary">Commencer la réservation</a>
        </div>
        <div class="col-md-6">
            <img src="https://i.pinimg.com/564x/bf/21/00/bf2100a097cdd451c4be28e3e612d8c7.jpg" class="img-fluid" alt="Image 1">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <img src="https://i.pinimg.com/564x/2f/ef/9e/2fef9e8c032d118725a1b6e87a7cf616.jpg" class="img-fluid" alt="Image 2">
        </div>
        <div class="col-md-6">
            <h3>Réservez avec facilité</h3>
            <p>Notre interface conviviale vous permet de réserver en quelques clics. Pas de tracas, pas de soucis.</p>
            <p>Consultez notre calendrier et choisissez la date qui vous convient le mieux. Nous nous occupons du reste.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <h3>Découvrez nos destinations</h3>
            <p>Explorez nos destinations les plus populaires et planifiez votre prochaine aventure dès aujourd'hui.</p>
        </div>
        <div class="col-md-6">
            <img src="https://i.pinimg.com/564x/54/28/84/5428847f4db00c7ffaf9865dcc9861c0.jpg" class="img-fluid" alt="Image 3">
        </div>
    </div>
</div>

<?php
    htmlFooter();
?>
