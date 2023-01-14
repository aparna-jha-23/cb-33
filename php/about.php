<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About us</title>
    <link rel="stylesheet" href="../css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="assets/img/My-Image.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../css/about.css">
  </head>
  <body>
    <header class="l-header">
    <nav class="nav bd-grid">
        <div>
          <a href="../php/home1.php" class="nav__logo">TextToimg</a>
        </div>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="../php/home1.php" class="nav__link active">Home</a>
            </li>
            <li class="nav__item">
              <a href="../php/about.php" class="nav__link">About</a>
            </li>
            <li class="nav__item">
              <a href="../php/generate.php" class="nav__link">Generate</a>
            </li>
            <li class="nav__item">
              <a href="../php/home.php" id="sign" class="nav__link">Logged in</a>
            </li>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </nav>
    </header>
    <section class="about section" id="about">
      <h2 class="section-title">About US</h2>

      <div class="about__container bd-grid">
        <div class="about__img">
          <img src="../img/logo.jfif " alt="logo" />
        </div>

        <div>
          <h2 class="about__subtitle">Text to Image</h2>
          <p class="about__text">
            Celestial Biscuit IGDTUW is a community focused to building
            innovative solutions to real world problems and providing guidance,
            motivation, and mentorship to women in tech. With over 200+ members
            it aims for advancement of the world through technical means with
            every action. For more info, visit the official website and follow
            celestial biscuit on Twitter, Instagram and Linkedin.
          </p>
        </div>
      </div>
    </section>

    <section>
      <div class="row">
        <h1>Our Team</h1>
      </div>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="../img/rectangle-25@2x.png" />
            </div>
            <h3>Name 1</h3>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="../img/rectangle-25@2x.png" />
            </div>
            <h3>Name 2</h3>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="../img/rectangle-25@2x.png" />
            </div>
            <h3>Name 3</h3>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="../img/rectangle-25@2x.png" />
            </div>
            <h3>Name 4</h3>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="../img/rectangle-25@2x.png" />
            </div>
            <h3>Name 5</h3>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="../img/rectangle-25@2x.png" />
            </div>
            <h3>Name 6</h3>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="../img/rectangle-25@2x.png" />
            </div>
            <h3>Name 7</h3>
          </div>
        </div>
       
      </div>
    </section>
    <footer class="footer">
      <p class="footer__title">TextToImg</p>
      <div class="footer__social">
        <a href="https://twitter.com/cbigdtuw" class="footer__icon"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.instagram.com/celestialbiscuit/" target="_blank" class="footer__icon"
          ><i class="bx bxl-instagram"></i
        ></a>
        <a href="https://www.linkedin.com/company/celestial-biscuit-igdtuw/ " class="footer__icon"><i class="bx bxl-linkedin"></i></a>
      </div>
      <p>&#169; 2023 copyright all right reserved</p>
    </footer>

    <script src="https://unpkg.com/scrollreveal "></script>
    <script src="../js/main.js"></script>
  </body>
</html>
