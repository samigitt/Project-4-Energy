<?php
function get_header()
{
    echo '
    <header class="header">
    <nav>
      <div>
        <a class="burger-menu-icon" onclick="clickBurgerMenu(' . "'aan'" . ')"><img class="small-icon hover" src="images/master/burger-menu-icon.png" alt=""></a>
        <a class="inloggen-button" href="#">Inloggen</a>
      </div>

      <ul class="burger-menu" id="show-menu">
        <li>
          <a onclick="clickBurgerMenu(' . "'uit'" . ')"><img class="small-icon hover" src="images/master/cross-icon.png" alt=""></a>
        </li>

        <li><a href="index.php">Home</a><li>

        <li><a href="producten.php">Producten</a><li>

        <li><a href="evenementen.php">Evenementen</a><li>

        <li><a href="artiesten.php">Artiesten</a><li>

        <li><a href="aanbiedingen.php">Aanbiedingen</a><li>

        <li><a href="overons.php">Over Ons</a><li>

        <li><a href="contact.php">Contact</a><li>
      </ul>
    </nav>
    <section class="header-text"><h1>One-Up</h1><h1>Aanbiedingen</h1></section>
  </header>
    ';
}

function get_footer()
{
    echo '
    <footer>
    <section class="footer-row1 footer-flex">
      <a class="footer-padding">Copyright</a>
      <a class="footer-padding">Disclaimer</a>
    </section>

    <section class="footer-row2 footer-flex">
      <a class="footer-padding-small"><img class="small-icon" src="images/master/facebook.png" alt=""></a>
      <a class="footer-padding-small"><img class="small-icon" src="images/master/instagram.png" alt=""></a>
      <a class="footer-padding-small"><img class="small-icon" src="images/master/twitter.png" alt=""></a>
      <a class="footer-padding-small"><img class="small-icon" src="images/master/tiktok.png" alt=""></a>
    </section>
  </footer>
    ';
}
?>