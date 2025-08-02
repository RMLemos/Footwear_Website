<!-- partials/navbar.php -->
<?php $pagina = basename($_SERVER['PHP_SELF']); ?>

<nav class="navbar navbar-expand-lg navbar-light nav-bg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo.svg" alt="Logotipo Ros Lisbon" width="92" height="32">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-link menu-link <?= $pagina == 'index.php' ? 'active' : '' ?>" href="index.php">Home</a>
      <a class="nav-link menu-link <?= $pagina == 'aboutus.php' ? 'active' : '' ?>" href="aboutus.php">A marca</a>
      <a class="nav-link menu-link <?= $pagina == 'products.php' ? 'active' : '' ?>" href="products.php">Produtos</a>
      <a class="nav-link menu-link <?= $pagina == 'news.php' ? 'active' : '' ?>" href="news.php">Notícias</a>
      <a class="nav-link menu-link <?= $pagina == 'contacts.php' ? 'active' : '' ?>" href="contacts.php">Contactos</a>
      </div>
    </div>
  </div>
</nav>