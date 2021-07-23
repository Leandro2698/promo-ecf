<?php $page ='contact'; ?>

<?php include("parts/header.php"); ?>
    <main>
        <section class="contact">
            <div class="container">
                <h2 class="title-contact">Nous contacter</h2>
                <form class="contact-form">
                    <div class="form-item-name">
                        <label class="label-contact" for="name">Votre nom</label>
                        <input type="text" id="name" placeholder="Entrez votre nom" required>
                    </div>
                    <div class="form-item-mail">
                        <label class="label-contact" for="email">Votre email</label>
                        <input type="email" id="email" placeholder="Entrez votre adresse e-mail" required>
                    </div>
                    <div class="form-item-msg">
                        <label class="label-contact" for="message">Votre message</label>
                        <textarea id="message" placeholder="Tapez votre message" required></textarea>
                    </div>
                    <div class="form-item-btn">
                        <button class="btn-form"><img src="img/Icon feather-arrow-right-circle.svg" alt="">Envoyer</button>
                    </div>
                </form>
            </div>

        </section>

        
    </main>

<?php include("parts/footer.php"); ?>