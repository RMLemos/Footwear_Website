<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Teste Bootstrap</title>

  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php include 'partials/navbar.php'; ?> <!-- Inclui a navbar -->

  <main>

    <section class="container-fluid">
      <div class="breadcrumb-section">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php" class="footer-link">Início</a></li>
            <li class="breadcrumb-item"><a href="news.php" class="footer-link"> RosLisbonBlog</a></li>
            <li class="breadcrumb-item" aria-current="page" class="footer-link">5 Tendências de Moda Outono/Inverno 2024
            </li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="container-fluid">
      <div class="textpost-container">
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">
            <img src="assets/images/capa_blog.jpg" alt="imagem com uma coroa de Outono" class="img-fluid w-100">
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2 d-flex justify-content-between align-items-baseline my-3">
            <a href="#" class="post-tag">Tendências</a>
            <p class="date-text">21 de Novembro de 2024</p>
          </div>
        </div>
        <article class="row">
          <div class="col-12 col-lg-8 offset-lg-2">
            <h2 class="mb-4">5 Tendências de Moda Outono/Inverno 2024</h2>
            <p>Este ano, as tendências para o outono/inverno 2024 combinam conforto e sofisticação de
              forma harmoniosa. Inspiradas pelos conceitos de intemporalidade e qualidade, as coleções
              destacam peças que resistem às mudanças de estação e permanecem sempre atuais. Entre
              as principais apostas para esta temporada estão o regresso da rebeldia biker, os looks
              monocromáticos e a irreverência de um estilo militar. Descubra as 5 principais tendências que
              vão marcar esta estação.
            </p>
            <h3>Principais tendências femininas para o outono/inverno 2024</h3>
            <p>A elegância e a sofisticação marcam a moda outono/inverno 2014-25.</p>
            <h4>1. Look monocromático</h4>
            <p>Os conjuntos monocromáticos podem ser divertidos e elegantes quando bem combinados.
              Embora não sejam uma novidade, continuam a ser uma das principais tendências desta
              estação. Com um estilo sofisticado, descomplicado e chic, estes conjuntos são perfeitos
              para trazer um toque de cor aos dias mais cinzentos.
            </p>
            <div class="col-12 col-lg-8 offset-lg-2 my-3">
              <img src="assets/images/blogtext1.jpg" alt="imagem com uma coroa de Outono" class="img-fluid w-100 mb-2">
            </div>
            <h4>2. Saias A-line</h4>
            <p>O A-line surgiu nos anos 50 com Christian Dior e está de regresso nesta
              temporada Outono-Inverno 2024.
            </p>
            <div class="col-12 col-lg-8 offset-lg-2">
              <img src="assets/images/blogtext2.jpg" alt="imagem com uma coroa de Outono" class="img-fluid w-100 my-2">
            </div>
            <h4>3. Peças oversized</h4>
            <p>O oversized é uma das tendências que se mantem neste outono/inverno 2024, sobretudo nas
              malhas. As camisolas de malhas grossa e em formas oversize são peças descontraídas,
              confortáveis e fáceis de combinar com outras peças de roupa. Além disso, são perfeitas para
              os dias frios, proporcionando calor e conforto sem abdicar do estilo.
            </p>
            <div class="col-12 col-lg-8 offset-lg-2">
              <img src="assets/images/blogtext3.jpg" alt="imagem com uma coroa de Outono" class="img-fluid w-100 my-2">
            </div>
            <h4>4. Estilo Militar</h4>
            <p>Uma das tendências de moda para o outono/inverno 2024 é o estilo militar, mas com uma
              abordagem mais feminina. Casacos em pele, botões dourados ou botas confortáveis, porém
              cheias de personalidade, são elementos-chave desta tendência que combina robustez e
              sofisticação.
            </p>
            <div class="col-12 col-lg-8 offset-lg-2">
              <img src="assets/images/blogtext4.jpg" alt="imagem com uma coroa de Outono" class="img-fluid w-100 my-2">
            </div>
            <h4>5. Biker</h4>
            <p>O estilo biker reflete-se sobretudo em casacos e coletes, dando um toque de rebeldia aos
              conjuntos. Clássico em preto, mas igualmente marcante em tons como azul, verde ou rosa,
              adapta-se a diferentes personalidades e ocasiões.
            </p>
            <div class="col-12 col-lg-8 offset-lg-2">
              <img src="assets/images/blogtext5.jpg" alt="imagem com uma coroa de Outono" class="img-fluid w-100 my-2">
            </div>
          </div>
        </article>
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2 d-flex alin-items-center my-5">
            <p class="pe-3">#tendências</p>
            <p class="pe-3">#moda</p>
            <p class="pe-3">#outono</p>
          </div>
        </div>
      </div>
    </section>


    <section class="container-fluid">
      <div class="textpost-container">
        <div class="row align-items-center text-center">
          <span class="border-style"></span>
          <div class="col-12 col-lg-6 border-right-style">
            <p class="article-style mb-1">Artigo Anterior</p>
            <p class="articletitle-style my-5">
              <a href="#"><i class="fa-solid fa-arrow-left page-link me-5" style="color: #1D2013;"></i></a>
              6 Ideias para presentes de Natal
            </p>
          </div>
          <div class="col-12 col-lg-6">
            <p class="article-style mb-1">Próximo Artigo</p>
            <p class="articletitle-style my-5">
              10º aniversário Ros Lisbon
              <a href="#"><i class="fa-solid fa-arrow-right page-link ms-5" style="color: #1D2013;"></i></a>
            </p>
          </div>
        </div>
        <span class="border-style"></span>
      </div>
    </section>

    <section class="container-fluid quote-section">
      <div class="textpost-container">
        <div class="row mt-4 mb-2">
          <h4 class="mt-4 mb-2">Artigos relacionados</h4>
        </div>
        <div class="row row-cols-3 row-cols-md-3 row-cols-lg-6 g-3 justify-content-between">
          <div class="col">
            <img src="assets/images/article1.jpg" alt="imagem modelo Lorena Setter" class="img-fluid">
            <a href="#" aria-label="Link para Artigo titulado Modelo Lorena Setter" class="article-link">
              <h6 class="mt-2">Modelo Lorena Setter</h6>
            </a>
            <p class="tag-style">Novidades</p>
          </div>
          <div class="col">
            <img src="assets/images/article2.jpg" alt="imagem modelo com look de inverno" class="img-fluid">
            <a href="#" aria-label="Link para Artigo titulado Dicas de looks de inverno" class="article-link">
              <h6 class="mt-2">Dicas de looks de inverno</h6>
            </a>
            <p class="tag-style">Lifestyle</p>
          </div>
          <div class="col">
            <img src="assets/images/blogpost3.jpg" alt="imagem de um mercado" class="img-fluid">
            <a href="#" aria-label="Link para Artigo titulado Ros Lisbon no Winter Market Stylista" class="article-link">
              <h6 class="mt-2">Ros Lisbon no Winter Market Stylista</h6>
            </a>
            <p class="tag-style">Eventos</p>
          </div>
          <div class="col">
            <img src="assets/images/article4.jpg" alt="imagem modelo sapatinhas nova coleção" class="img-fluid">
            <a href="#" aria-label="Link para Artigo titulado Apresentação nova coleção" class="article-link">
              <h6 class="mt-2">Apresentação nova coleção</h6>
            </a>
            <p class="tag-style">Eventos</p>
          </div>
          <div class="col">
            <img src="assets/images/blogpost1.jpg" alt="imagem balões" class="img-fluid">
            <a href="#" aria-label="Link para Artigo titulado 10º aniversário Ros Lisbon" class="article-link">
              <h6 class="mt-2">10º aniversário Ros Lisbon</h6>
            </a>
            <p class="tag-style">Eventos</p>
          </div>
          <div class="col">
            <img src="assets/images/article6.jpg" alt="imagem árvore de Natal" class="img-fluid">
            <a href="#" aria-label="Link para Artigo titulado 6 Ideias para presentes de Natal" class="article-link">
              <h6 class="mt-2">6 Ideias para presentes de Natal</h6>
            </a>
            <p class="tag-style">Novidades</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include 'partials/footer.php'; ?> <!-- Inclui o footer -->
  <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>