<!DOCTYPE html>
<html>

  <!-- =======================================
  ===========HEAD ==================== -->

<head>
<meta charset="utf-8">
<meta name="description" content="Trainee web developer portfolio website.">
<meta name="keywords" content="HTML, CSS, JavaScript, Portfolio, SCS scheme, Scion Coalition Scheme">
<meta name="author" content="Lemuel Walkinshaw">
<link rel="icon" href="img/purple-triangle.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="scss/application.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/fac1c8a231.js" crossorigin="anonymous"></script>
<title><?php echo $pageTitle;?></title>
</head>


<body>

  <header id="nav-lo">

    <nav>
      <div>
        <div class="nav-link-initials"><a href="index.php">LW</a></div>
        <ul>
          <li class="nav-link"><a href="about.php">About Me</a></li>
          <li class="nav-link"><a href="index.php#portfolio">My Portfolio</a></li>
          <li class="nav-link"><a href="coding.php">Coding Examples</a></li>
          <li class="nav-link"><a href="scs.php">SCS Scheme</a></li>
          <li class="nav-link"><a href="index.php#contact">Contact Me</a></li>
          <li class="nav-link"><a target="_blank" rel="noopener" href="https://github.com/LemWalk"><i class="fa-brands fa-github"></i>My GitHub</a></li>

        </ul>
      </div>
    </nav>    

  </header>

  <main>

  <div class="banner-top">
  <div class="banner-inner">

    <h1 class="banner-title"><?php echo $pageTitle;?></h1>

    <div id="menu-btns">

      <!-- <div class="form-box">
        <div class="button-box">
          <div id="btn"></div>
          <button type="button" class="toggle-btn" onclick="leftClick()"><i class="fa-solid fa-sun"></i></button>
          <button type="button" class="toggle-btn" onclick="rightClick()"><i class="fa-solid fa-moon"></i></button>
        </div>
      </div> -->

<!-- ===============burger-menu ===================== -->

        <div class="off-screen-menu">
          <ul class="off-screen-menu-list">
            <li class="nav-link-off-screen"><a href="index.php">Home</a></li>
            <li class="nav-link-off-screen"><a href="about.php">About Me</a></li>
            <li class="nav-link-off-screen"><a href="index.php#portfolio">My Portfolio</a></li>
            <li class="nav-link-off-screen"><a href="coding.php">Coding Examples</a></li>
            <li class="nav-link-off-screen"><a href="scs.php">SCS Scheme</a></li>
            <li class="nav-link-off-screen"><a href="index.php#contact">Contact Me</a></li>
            <li class="nav-link-off-screen"><a target="_blank" rel="noopener" href="https://github.com/LemWalk"><i class="fa-brands fa-github"></i>My GitHub</a></li>

          </ul>
        </div>

        <div class="burger-menu">
          <div class="ham-bar bar-top"></div>
          <div class="ham-bar bar-mid"></div>
          <div class="ham-bar bar-bot"></div>
        </div>

      </div>

  </div>
  </div>