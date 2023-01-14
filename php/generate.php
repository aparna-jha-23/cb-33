<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="shortcut icon"
      href="assets/img/My-Image.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../css/generate.css">
    <link rel="stylesheet" href="../css/styles.css">
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
    <section class="page">
        <h1>Create Something amazing</h1>
        <div class="sides">
            <div class="left1">
                <div class="tt">
                    <p class="pp">Describe What you want to create</p>
                    <textarea name="Textarea" id="area"></textarea>
                </div>
                <a href="#" class="button">Create</a>
            </div>
            <div class="right1">
                <div class="imm">

                </div>
            </div>
        </div>
    </section>

    <script src="../js/main.js"></script>
</body>
</html>