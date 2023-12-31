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

            <a href="#" class="btn btn-primary animated-button">Faire un don</a>
        </div>
    </div>


    <!-- Section À Propos -->
    <section class="about-section">
        <div class="container">
            <h2>À Propos</h2>
            <p><b>ALLO LA TERRE</b> est une organisation non gouvernementale dédiée à la connexion des donateurs généreux avec <b>des projets innovants et durables pour notre planète</b>. Nous sommes convaincus que chacun d'entre nous a le pouvoir de faire une différence.</br> C'est pourquoi nous avons créé une plateforme pour faciliter cette union, transformant l'intention en action. En soutenant des initiatives variées allant de la conservation des ressources à l'éducation environnementale, nous avons pour ambition de contribuer activement à la préservation de la Terre.</br> <b>Rejoignez-nous et ensemble, faisons la différence pour notre monde.</b></p>
        </div>
        <div class="container d-flex justify-content-center">
            <a href="about.php" class="btn btn-primary animated-button">En savoir plus</a>
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
                <a href="projets.php" class="btn btn-primary animated-button">Voir tous les projets</a>
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