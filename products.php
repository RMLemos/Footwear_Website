<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ros Lisbon Website - Produtos</title>

    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include 'partials/navbar.php'; ?> <!-- Inclui a navbar -->
    <?php include 'data/produtos.php'; ?>

    <main>
        <section class="container-fluid">
            <div class="product-section">
                <div class="row text-center">
                    <div class="col-12 col-lg-4 offset-lg-4 pb-3">
                        <h1>Produtos</h1>
                    </div>
                    <div class="col-12 col-lg-4 offset-lg-4">
                        <p class="products-text">Criamos sapatos confortáveis e de qualidade, especialmente para si.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-flex align-items-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a class="footer-link" href="products.php">Todos</a></li>
                            <li class="list-inline-item"><a class="footer-link" href="#">Botas</a></li>
                            <li class="list-inline-item"><a class="footer-link" href="#">Sapatos</a></li>
                        </ul>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">Ordenar por</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Mais recentes</a></li>
                                <li><a class="dropdown-item" href="#">Mais antigos</a></li>
                                <li><a class="dropdown-item" href="#">A-Z</a></li>
                                <li><a class="dropdown-item" href="#">Z-A</a></li>
                            </ul>
                        </div>
                    </div>
                    <span class="border-style"></span>
                </div>
            </div>
        </section>

        <?php  if(count($produtos) >0): ?>
        <section class="container-fluid">
            <div class="products-container">
                <div class="row g-3">
                    <?php foreach($produtos as $produto): ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <a href="product.php?id=<?= urlencode($produto['id']) ?>&nome=<?= urlencode($produto['nome']) ?>&imagem=<?= urlencode($produto['imagem']) ?>" class="product-link">
                            <div class="card product-card text-center">
                                <img src="<?php echo $produto['imagem']; ?>" class="card-img-top"
                                    alt="<?php echo $produto['nome']; ?>">
                                <div class="card-body card-container">
                                    <p class="product-name">
                                        <?php echo $produto['nome']; ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php else: ?>
        <section class="container-fluid">
            <div class="product-section">
                <div class="row text-center">
                    <div class="col-12 col-lg-4 offset-lg-4 pb-3">
                        <p class="products-text">Não foram encontrados produtos para apresentar. Regresse à página
                            inicial.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </main>
    <?php include 'partials/newsletter.php'; ?> <!-- Inclui sign newsletter -->
    <?php include 'partials/footer.php'; ?> <!-- Inclui o footer -->
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>