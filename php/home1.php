<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TextToImg</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
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
    
    <main class="l-main">
      <section class="home bd-grid" id="home">
        <div class="home__data">
          <h1 class="home__title">
            Convert text to<br /><span class="home__title-color"
              >image with</span
            ><br />AI generator.
          </h1>

          <a href="../php/generate.php" class="button">Generate</a>
        </div>

        <div class="home__social">
          
        </div>

        <div class="home__img">
            <div class="im">
                <img src="../img/rectangle-6@2x.png" alt="" srcset="" />
                <img src="../img/rectangle-10@2x.png" alt="" srcset="" />
                <div class="home__img mr">
                  <div class="im">
                    <img src="../img/rectangle-11@2x.png" alt="" srcset="" />
                    <img src="../img/rectangle-12@2x.png" alt="" srcset="" />
                  </div>
                </div>
          </div>
        </div>
      </section>


      
    </main>

    <footer class="footer">
      <p class="footer__title">TextToImg</p>
      <div class="footer__social">
        <a href="https://twitter.com/cbigdtuw" class="footer__icon"><i class="bx bxl-twitter"></i></a>
        <a
          href="https://www.instagram.com/celestialbiscuit/"
          target="_blank"
          class="footer__icon"
          ><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/company/celestial-biscuit-igdtuw/ " class="footer__icon"><i class="bx bxl-linkedin"></i></a>
      </div>
      <p>&#169; 2023 copyright all right reserved</p>
    </footer>

    <script src="https://unpkg.com/scrollreveal "></script>

    <script src="../js/main.js"></script>
</body>
</html>