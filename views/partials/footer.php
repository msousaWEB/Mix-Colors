<footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm">
                        <div class="footer-info">
                        <h4 style="font-size: 25px;">mixcolors.</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        </div>
                    </div>
    
                    <div class="col-sm">
                        <div class="footer-links">
                            <h4>Links úteis</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#about">About us</a></li>
                                <li><a href="#services">Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm">
                        <div class="footer-links">
                            <h4>Contate-nos</h4>
                            <p>
                                <strong>Phone:</strong> +1 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-sm">
                        <h4>Siga-nos!</h4>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
             </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>mixcolors</strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="assets/js/main.js"></script>
  <!-- <script src="https://smtpjs.com/v3/smtp.js"></script> -->

  <script>
    var typingEffect = new Typed (".multiText", {
        strings: ["Portfolio.", "Marketing.", "Design."],
        loop: true,
        typeSpeed: 100,
        backSpeed: 80,
        backDelay: 1500,
    })

    Email.send({
        Host : "smtp.yourisp.com",
        Username : "username",
        Password : "password",
        To : 'them@website.com',
        From : "you@isp.com",
        Subject : "This is the subject",
        Body : "And this is the body"
      }).then(
        message => alert(message)
    );
</script>

</body>

</html>