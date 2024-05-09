<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Meal Planner поможет вам составить индивидуальный план питания, учитывающий ваши вкусы. Вы сможете достичь своих диетических и питательных целей с помощью нашего калькулятора калорий и ежедневных меню.">
    <meta name="description" content="">
    <title>Главная</title>
    <?php 
        if (basename($_SERVER['REQUEST_URI']) == "nutrient_table.php") {
    ?>
        <link rel="stylesheet" <?= setHrefSrc('style/nutrient_table', 'css') ?> media="screen">
    <?php 
        }else{
    ?>
        <link rel="stylesheet" <?= setHrefSrc('style/index', 'css') ?> media="screen">
    <?php 
        }
    ?>
    <link rel="stylesheet" <?= setHrefSrc('style/nicepage', 'css') ?> media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script class="u-script" type="text/javascript" 
    <?= setHrefSrc('javascript/planner', 'js', 'src') ?> defer=""></script>
    <!-- dish -->
    <script class="u-script" type="text/javascript" 
    <?= setHrefSrc('javascript/dish', 'js', 'src') ?> defer=""></script>
    <!-- Responsive -->
    <script class="u-script" type="text/javascript" 
    <?= setHrefSrc('javascript/responsive', 'js', 'src') ?> defer=""></script>
    <!-- mail -->
    <script class="u-script" type="text/javascript" 
    <?= setHrefSrc('javascript/mail', 'js', 'src') ?> defer=""></script>
    <!-- nutrient_table -->
    <script class="u-script" type="text/javascript" 
    <?= setHrefSrc('javascript/nutrient_table', 'js', 'src') ?> defer=""></script>
    <!-- <script class="u-script" type="text/javascript" 
    <?= setHrefSrc('javascript/jquery', 'js', 'src') ?> defer=""></script>
    <script class="u-script" type="text/javascript" 
    <?= setHrefSrc('javascript/nicepage', 'js', 'src') ?> defer=""></script> -->

    <meta name="theme-color" content="#803bec">
    <meta property="og:title" content="Главная">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Главная.html" data-home-page-title="Главная" data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="ru"><header class="u-clearfix u-header u-header" id="sec-8624"><div class="u-clearfix u-sheet u-sheet-1">
        <a <?= setHrefSrc('index') ?> class="u-image u-logo u-image-1" data-image-width="1949" data-image-height="762">
          <img src="images/-27777777.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container" wfd-invisible="true">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" <?= setHrefSrc('index') ?> style="padding: 10px 20px;">Главная</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" <?= setHrefSrc('nutrient_table') ?> style="padding: 10px 20px;">Приёмы пищи</a>
</li><li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="#carousel_229a" style="padding: 10px 20px;">Подписка</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
<li class="u-nav-item"><a class="u-button-style u-nav-link" <?= setHrefSrc('index') ?>style="padding: 10px 20px;">Главная</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" <?= setHrefSrc('nutrient_table') ?> style="padding: 10px 20px;">Приёмы пищи</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#carousel_229a" style="padding: 10px 20px;">Подписка</a>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70" wfd-invisible="true"></div>
          </div>
          <style class="offcanvas-style">                        </style>
        </nav>
      </div></header> 