<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'head.php'; ?>

<body>
  <?php
  include 'topbar.php';
  include 'navbar.php';
  ?>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contato/bg-contato.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Contato</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex contact-info justify-content-center">
        <div class="col-md-10">
          <div class="row mb-5">
            <div class="col-md-4 text-center d-flex">
              <div class="border w-100 p-4">
                <div class="icon">
                  <span class="icon-map-o"></span>
                </div>
                <p><span>Endereço:</span> Rua Progresso, 107 - Santa Terezinha - São Bernardo do Campo - SP</p>
              </div>
            </div>
            <div class="col-md-4 text-center d-flex">
              <div class="border w-100 p-4">
                <div class="icon">
                  <span class="icon-phone"></span>
                </div>
                <p><span>Telefone:</span> <a href="tel://+551149012717" title="Telefone Life Confort">(11) 4901-2717</a></p>
              </div>
            </div>
            <div class="col-md-4 text-center d-flex">
              <div class="border w-100 p-4">
                <div class="icon">
                  <span class="icon-envelope-o"></span>
                </div>
                <p><span>Email:</span> <a href="assistência@lifeconfort.com.br" title="Email Assistencia Life Confort">assistência@lifeconfort.com.br</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row block-9 justify-content-center mb-5">
        <div class="col-md-10">
          <h2 class="text-center">Solicite um orçamento com nossa equipe</h2>
          <form action="#" class="border p-5 contact-form">
            <div class="form-group">
              <input type="text" class="form-control" name="nome" placeholder="Nome">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="assunto" placeholder="Assunto">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" name="mensagem" placeholder="Mensagem"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container-fluid px-0">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.8456386118582!2d-46.542754785019376!3d-23.717205784605763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce419185acbba3%3A0x1b3ed02ed4e7b9b8!2sR.%20Progresso%2C%20107%20-%20Santa%20Terezinha%2C%20S%C3%A3o%20Bernardo%20do%20Campo%20-%20SP%2C%2009780-130!5e0!3m2!1spt-BR!2sbr!4v1603937112433!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg>
  </div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>