<section id="contact" class="contato">
    <div class="container" data-aos="fade-up">
        <div class="row feature-item mt-1 pt-5">
            
        <header class="section-header mb-1">
            <h3 class="section-title">Envie-nos um e-mail</h3>
        </header>
        <div class="col-lg-6 wow fadeInUp order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img id="contact-img" src="assets/img/mobile.svg" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-delay="150">
            <div class="form" id="contact">
                <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
    
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Digite o seu nome" required>
                    </div>
                    <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite o seu e-mail" required>
                    </div>
                    <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
                    </div>
                    <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="4" placeholder="Mensagem" required></textarea>
                    </div>
    
                    <div class="my-3">
                    <div class="loading">Enviando...</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Sua mensagem foi enviada com sucesso. Obrigado!</div>
                    </div>
                    <div class="text-center"><button type="submit" title="Send Message">Enviar mensagem</button></div>
                </form>

                </div>
            </div>
        </div>
    </div>
</section>