<!DOCTYPE html>
<html lang="en">

<?php
$title = "Information on arable pesticides";
$active = 'home';
include 'includes/head.php';
?>

<body>
  <?php
  include 'includes/nav-bar.php';
  ?>
  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <!-- <h1 class="display-3">Web Design</h1>
              <p class="lead">TimeSpace working on website designing in junagadh.we provide responsive web
                design,E-commerce solution,parallax scrolling etc</p> -->
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <!-- <h1 class="display-3">Web Development</h1>
              <p class="lead">We working on web development services. TimeSpace Provide hotel booking,school web
                portal,travels booking , business web development etc...</p> -->
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <!-- <h1 class="display-3">Video Editing</h1>
              <p class="lead">We working on video editing services. TimeSpace Provide animated video,editing, cartoon
                creation, advertise etc...
              </p> -->
            </div>
          </div>
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <!--HOME ICON SECTION  -->
  <section id="home-icons" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <img class="img-fluid fix" src="./img/paddy/download.jpg" />
          <h3>Paddy</h3>
          <p>Paddy(Oryza sativa) cultivation is the most important agricultural operation in the country, not only...</p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <img class="img-fluid fix" src="./img/cotton/cotton.jpg" />
          <h3>Cotton</h3>
          <p>Cotton is a pest-loving plant and due to this habit it has become a....</p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <img class="img-fluid fix" src="./img/wheat/download.jpg" />
          <h3>wheat</h3>
          <p>Wheat (Triticum aestivum L.) is the second most important cereal crop of India next to Rice. ...</p>
        </div>
      </div>
    </div>
  </section>

  <!-- HOME HEADING SECTION -->
  <section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            <h1>Information on arable pesticides</h1>
            <p class="d-none d-md-block">We Specialize in Creating Great Quality Website design,software,application,web
              application and video editing.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INFO SECTION -->
  <section id="info" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3>Information on arable pesticides</h3>
          <p>Time Space Tech is an IT service company in Junagadh. We provide multiple range of Services for clients who
            value quality services and high end design. We also provide Project Training for Students and Professional
            Training to get you started with the current trends in the IT industry.</p>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <img src="img/logo.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- PHOTO GALLERY -->
  <section id="gallery" class="py-5">
    <div class="container">
      <h1 class="text-center">Photo Gallery</h1>
      <p class="text-center">Check out our photos</p>
      <div class="row mb-4">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="./img/Narrow Leaf.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
            <img src="./img/Narrow Leaf.jpg" alt="" class="img-fluid fix">
          </a>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
          <a data-toggle="lightbox" data-gallery="img-gallery" data-height="561" data-width="561">
            <img src="img/Targa super.jpg" alt="" class="img-fluid fix">
          </a>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
          <a href="./img/Vitvax powder.png" data-toggle="lightbox" data-gallery="img-gallery" data-height="562" data-width="562">
            <img src="./img/Vitvax powder.png" alt="" class="img-fluid fix">
          </a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4 d-flex justify-content-center">
          <a href="img/img-4.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="563" data-width="563">
            <img src="img/wheat/image1.jpeg" alt="" class="img-fluid fix">
          </a>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
          <a href="img/img-5.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="564" data-width="564">
            <img src="img/cotton/image10.png" alt="" class="img-fluid fix">
          </a>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
          <a href="img/img-6.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="565" data-width="565">
            <img src="img/paddy/image1.jpeg" alt="" class="img-fluid fix">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- NEWSLETTER -->
  <section id="newsletter" class="text-center p-5 bg-success text-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Sign Up For Our Newsletter</h1>
          <p>We upload useful content in our website.</p>
          <form class="form-inline justify-content-center">
            <button class="btn btn-primary mb-2"><a class="text-white" href="./contact.php">Contact us</a></button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
  include 'includes/footer.php';
  ?>
  <script>
    // Configure Slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });

    // Video Play
    $(function() {
      // Auto play modal video
      $(".video").click(function() {
        var theModal = $(this).data("target"),
          videoSRC = $(this).attr("data-video"),
          videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function() {
          $(theModal + ' iframe').attr('src', videoSRC);
        });
      });
    });
  </script>
</body>

</html>