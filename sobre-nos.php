<!DOCTYPE html>
<html lang="pt-BR">
<?php include 'head.php'; ?>

<body>

  <?php
  include 'topbar.php';
  include 'navbar.php';
  ?>
  <!-- END nav -->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Sobre Nós</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sobre nós <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
    <div class="container consult-wrap">
      <div class="row d-flex align-items-stretch">
        <div class="col-md-6 wrap-about align-items-stretch d-flex">
          <div class="img" style="background-image: url(images/about.jpg);"></div>
        </div>
        <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
          <div class="heading-section mb-4">
            <span class="subheading">Somos a Life Confort</span>
            <h2>The Smartest Thing To Do With Your Consulting Business</h2>
          </div>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          <div class="tabulation-2 mt-4">
            <ul class="nav nav-pills nav-fill d-md-flex d-block">
              <li class="nav-item">
                <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Our Mission</a>
              </li>
              <li class="nav-item px-lg-2">
                <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Our Vision</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Our Value</a>
              </li>
            </ul>
            <div class="tab-content bg-light rounded mt-2">
              <div class="tab-pane container p-0 active" id="home1">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class="tab-pane container p-0 fade" id="home2">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
              <div class="tab-pane container p-0 fade" id="home3">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              </div>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="1387">0</strong>
                  <span>Happy Clients</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="310">0</strong>
                  <span>Success Reports</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="35">0</strong>
                  <span>Experienced</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-start">
        <div class="col-md-6 py-5 px-md-5">
          <div class="py-md-5">
            <div class="heading-section heading-section-white ftco-animate mb-5">
              <h2 class="mb-4">Request A Quote</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
            <form action="#" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Select Guidance</option>
                        <option value="">Finance</option>
                        <option value="">Business</option>
                        <option value="">Auto Loan</option>
                        <option value="">Real Estate</option>
                        <option value="">Other Services</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Request A Quote" class="btn btn-white py-3 px-4">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section testimony-section">
    <div class="container-fluid px-md-5">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <span class="subheading">Testimonies</span>
          <h2 class="mb-4">Our Clients Says</h2>
          <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                </div>
                <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Racky Henderson</p>
                  <span class="position">Father</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img" style="background-image: url(images/person_2.jpg)">
                </div>
                <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Henry Dee</p>
                  <span class="position">Businesswoman</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img" style="background-image: url(images/person_3.jpg)">
                </div>
                <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Mark Huff</p>
                  <span class="position">Businesswoman</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img" style="background-image: url(images/person_4.jpg)">
                </div>
                <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Rodel Golez</p>
                  <span class="position">Businesswoman</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img" style="background-image: url(images/person_1.jpg)">
                </div>
                <div class="text pl-4">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <p class="name">Ken Bosh</p>
                  <span class="position">Businesswoman</span>
                </div>
              </div>
            </div>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>