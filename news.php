<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ros Lisbon Website - Notícias</title>

    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include 'partials/navbar.php'; ?> <!-- Inclui a navbar -->

    <main>
        <section class="container-fluid">
            <div class="product-section">
                <div class="row text-center">
                    <div class="col-12 col-lg-4 offset-lg-4 pb-3">
                        <h1>The Ros Lisbon Blog</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 menu-page">
                        <a class="page-link" href="news.php">Todos</a>
                        <a class="page-link" href="#">Lifestyle</a>
                        <a class="page-link" href="#">Tendências</a>
                        <a class="page-link" href="#">Eventos</a>
                        <a class="page-link" href="#">Novidades</a>
                    </div>
                    <div
                        class="col-12 col-lg-6 d-flex justify-content-center d-flex justify-content-lg-end align-items-center">
                        <form action="#" method="post" class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <span class="border-style"></span>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="post-container">
                <div class="row position-relative hero-blog">
                    <div class="col-12 col-lg-8 p-0">
                        <img class="w-100" src="assets/images/capa_blogpost.jpg" alt="Imagem do blog">
                    </div>
                    <div class="col-12 col-lg-5 p-0 card-postcontainer">
                        <div class="card card-post">
                            <div class="card-body">
                                <p class="card-tag ms-5 mt-4">Tendências</p>
                                <h2 class="ms-5 mt-2 mb-4">5 Tendências de Moda Outono/Inverno 2024</h2>
                                <a href="post.php"><button type="button" class="btn btn-outline-success ms-5 mb-4 mt-3">Ler o post</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="post-container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 mb-5">
                        <div class="card card-blog mx-auto">
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    <img src="assets/images/blogpost1.jpg" class="img-fluid card-img" alt="Imagem de balões">
                                </div>
                                <div class="col-lg-5">
                                    <div class="card-body card-text text-start">
                                        <p class="card-tag mt-lg-5">Eventos</p>
                                        <h2 class="card-title">10º aniversário Ros Lisbon</h2>
                                        <p class="pe-2 text-blog">2024 é um ano especial para a Ros Lisbon. A
                                            marca comemora o seu 10º aniversário.
                                        </p>
                                        <a href="#" class="btn btn-outline-success mt-3">Ler o post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-5">
                        <div class="card card-blog mx-auto">
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    <img src="assets/images/blogpost2.jpg" class="img-fluid card-img" alt="Imagem do modelo Lorena Setter">
                                </div>
                                <div class="col-lg-5">
                                    <div class="card-body card-text text-start">
                                        <p class="card-tag mt-lg-5">Novidades</p>
                                        <h2 class="card-title">Modelo Lorena Setter</h2>
                                        <p class="pe-2 text-blog">Há um novo modelo de botas para descobrir
                                            na elegante coleção outono/inverno 2024.
                                        </p>
                                        <a href="#" class="btn btn-outline-success mt-3">Ler o post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card card-blog mx-auto">
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    <img src="assets/images/blogpost3.jpg" class="img-fluid card-img" alt="Imagem de um mercado">
                                </div>
                                <div class="col-lg-5">
                                    <div class="card-body card-text text-start">
                                        <p class="card-tag mt-lg-5">Eventos</p>
                                        <h2 class="card-title">Ros Lisbon no Winter Market Stylista</h2>
                                        <p class="pe-2 text-blog">A Ros Lisbon vai estar presente no Winter
                                            Market Stylista, no próximo fim-de-semana.
                                        </p>
                                        <a href="#" class="btn btn-outline-success mt-3">Ler o post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'partials/newsletter.php'; ?> <!-- Inclui sign newsletter -->
        <?php include 'partials/footer.php'; ?> <!-- Inclui o footer -->

        <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>