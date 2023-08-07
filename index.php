<?php include __DIR__ . '/includes/header.php'; ?>
<?php include __DIR__ . '/includes/nav.php'; ?>
<?php
$pageTitle = 'Accueil';
include __DIR__ . '/includes/header.php';
?>
<main>
    <!-- Hero Section avec image de fond et bouton "Faire un don" -->

    <div class="hero">
        <div class="hero-text">
            <h1>Aidez-nous à faire la différence</h1>
            <p>Rejoignez-nous dans notre mission pour aider ceux qui en ont le plus besoin.</p>
        
            <a href="#" class="btn btn-primary">Faire un don</a>
        </div>
    </div>


    <!-- Section À Propos -->
    <section class="about-section">
        <div class="container">
            <h2>À Propos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas interdum lacus sed tellus viverra placerat.</p>
        </div>
        <div class="container d-flex justify-content-center">
            <a href="about.php" class="btn btn-primary">En savoir plus</a>
        </div>
    </section>

    <!-- Section Projets -->
    <section class="projects-section">
        <div class="container">
            <h2>Derniers Projets</h2>
            <div class="row">
                <!-- Ici cartes de projets -->
            </div>
            <div class="container d-flex justify-content-center">
                <a href="projets.php" class="btn btn-primary">Voir tous les projets</a>
            </div>
        </div>
    </section>

    <!-- Section Témoignages -->
    <section class="testimonials-section">
        <div class="container">
            <h2>Témoignages</h2>
            <div class="row">
                <!-- Ici cartes de témoignages -->
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>