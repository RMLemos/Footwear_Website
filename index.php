<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ros Lisbon Website</title>

    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'partials/navbar.php'; ?> <!-- Inclui a navbar -->

    <main>
        <header class="container-fluid">
            <div class="hero-container">
                <img src="assets/images/herohomepage.jpg" alt="Imagem mulher com botas" class="imgright img-fluid">
                <div class="left-container">
                    <img src="assets/images/botashero.jpg" alt="Modelo de botas" class="img-fluid">
                </div>
            </div>
        </header>
    </main>

    <section class="container-fluid">
            <div class="wide-container">
                <div class="row">
                    <div class="col-12 col-lg-5 offset-lg-1 mt-5">
                        <h2 class="mb-3">Qualidade Premium</h2>
                        <p class="mb-4">A ROS Lisbon é uma marca portuguesa focada na
                            produção de artigos de qualidade superior. Para o
                            conforto do calçado são selecionadas peles líderes
                            de mercado e aplicadas palmilhas acolchoadas.
                        </p>
                        <a href="aboutus.php" class="btn btn-outline-success mb-3 mt-2">Sobre Nós</a>
                    </div>
                    <div class="col-12 col-lg-5">
                        <img src="assets/images/productsroslisbon.png" alt="imagem para sapatos da marca RosLisbon" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="wide-container">
                <div class="row">
                    <div class="col-12 col-md-6 p-2">
                        <div class="card card-products">
                            <img src="assets/images/botas_pinicialb.jpg" alt="Imagem de Botas Ros Lisbon" class="card-img">
                            <div
                                class="card-img-overlay d-flex flex-column align-items-end justify-content-start p-3 text-start">
                                <div class="text-dark p-2">
                                    <h4 class="card-title">Botas</h4>
                                    <a href="#" class="btn btn-outline-success">Ver Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-2">
                        <div class="card card-products">
                            <img src="assets/images/sapatos_pinicial.jpg" alt="Imagem de um par de sapatos" class="card-img">
                            <div
                                class="card-img-overlay d-flex flex-column align-items-end justify-content-start p-3 text-start">
                                <div class="text-dark p-2">
                                    <h4 class="card-title">Sapatos</h4>
                                    <a href="#" class="btn btn-outline-success">Ver Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid">
            <div class="wide-container">
                <div class="row justify-content-center text-center">
                    <div class="col-12 mb-5">
                        <h2>The Ros Lisbon Blog</h2>
                    </div>
                    <div class="col-12">
                        <div class="card card-blog mx-auto">
                            <div class="row g-0">
                                <div class="col-lg-4">
                                    <img src="assets/images/capa_blog.jpg" class="img-fluid card-img"alt="Imagem de coroa de Outono">
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-body card-text text-start">
                                        <p class="card-tag">Tendências</p>
                                        <h2 class="card-title">5 Tendências de Moda Outono/Inverno 2024</h2>
                                        <p class="pe-2 text-blog">Este ano, as tendências para o outono/inverno 2024 combinam
                                                conforto e sofisticação de
                                                forma harmoniosa. Inspiradas pelos conceitos de intemporalidade e
                                                qualidade, as coleções
                                                destacam peças que resistem às mudanças de estação e permanecem sempre atuais. 
                                        </p>
                                        <a href="post.php" class="btn btn-outline-success mt-3">Ler o post</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php include 'partials/newsletter.php'; ?> <!-- Inclui a navbar -->
    <?php include 'partials/footer.php'; ?> <!-- Inclui a navbar -->

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>