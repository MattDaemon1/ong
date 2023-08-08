<?php include __DIR__ . '/includes/header.php'; ?>
<?php include __DIR__ . '/includes/nav.php'; ?>
<?php
$pageTitle = 'Contact';
include __DIR__ . '/includes/header.php';
?>
<main>
    <div class="hero contact-hero">
        <div class="hero-text">
            <h1>Contactez-nous</h1>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Présentation -->
            <div class="col-lg-6">
                <h2>Restons en contact</h2>
                <p>
                    Vous avez une question, une suggestion ou vous souhaitez en savoir plus sur nos projets? N'hésitez pas à nous contacter. Nous sommes toujours prêts à écouter et à répondre à vos besoins. Ensemble, nous pouvons faire une différence pour notre planète.
                </p>
            </div>

            <!-- Formulaire de contact -->
            <div class="col-lg-6">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="firstName">Prénom:</label>
                        <input type="text" class="form-control" id="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Nom:</label>
                        <input type="text" class="form-control" id="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rgpd" required>
                        <label class="form-check-label" for="rgpd">J'accepte la politique de confidentialité.</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
                <div id="successMessage" class="alert alert-success mt-4" style="display: none;">Votre message a été envoyé avec succès!</div>
                <div id="errorMessage" class="alert alert-danger mt-4" style="display: none;">Veuillez remplir tous les champs correctement.</div>
            </div>
        </div>
    </div>
</main>
<?php include __DIR__ . '/includes/footer.php'; ?>