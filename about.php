<!DOCTYPE html>
<html lang="en">
<?php
$active = 'about';
$title = "About | Time Space";
include 'includes/head.php';
?>

<body>
  <?php
  include 'includes/nav-bar.php';
  ?>
  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>About Us</h1>
          <!-- <p>Time Space is website design and web development service provider company.</p> -->
        </div>
      </div>
    </div>
  </header>

  <!-- ABOUT SECTION -->
  <section id="about" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>What We Do</h1>
          <p>Time Space is best Website Design Company in Junagadh.We are working on Website Design, Web Development,
            SEO/SMO, Digital Marketing, Mobile Applications, Game Development, Software Development. MementoTech is
            Junagadh based It company.</p>
          <p>
            Here at Time Space, we put technology in your hand so you can not only do your business better but also make
            your presence felt on the internet. This will help you grow your business's reach in the vastness of world
            wide web.
          </p>
        </div>
        <div class="col-md-6 d-flex justify-content-center">
          <img src="img/logo.jpg" alt="" class="img-fluid rounded-circle d-none d-md-block about-img">
        </div>
      </div>
    </div>
  </section>

  <?php
  include 'includes/footer.php';
  ?>
</body>

</html>