<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ProductRos Lisbon Website - Produto</title>

  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

  <?php include 'partials/navbar.php'; ?> <!-- Inclui a navbar -->


  <?php
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
        $imagem = isset($_GET['imagem']) ? $_GET['imagem'] : null;

       # echo "ID: " . htmlspecialchars($id) . "<br>";
       # echo "Nome: " . htmlspecialchars($nome) . "<br>";
       # echo "Imagem: " . htmlspecialchars($imagem);
    ?>

  <main>
    <section class="container-fluid">
      <div class="contact-section">
        <div class="row">
          <div class="col-12 col-lg-6">

         <img id="mainImage" src="assets/images/ProductMarieblack.jpg" class="img-fluid">

               <div class="d-flex justify-content-center mt-2">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="assets/images/ProductMarieblack.jpg" checked>
               <!-- <label class="form-check-label" for="inlineRadio1">1</label>-->
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="assets/images/ProductMarieblackb.jpg">
                <!--<label class="form-check-label" for="inlineRadio2">2</label>-->
                </div>

          </div>
          </div>
          <div class="col-12 col-lg-6">
            <h1><?php echo htmlspecialchars($nome); ?></h1>
            <p class="mt-4">Este best seller é um modelo confortável para
              o dia-a-dia, com um design esguio e elegante.
            </p>
            <p class="mt-4">Esta pele pode apresentar nervuras e pontos,
              trata-se de uma característica natural da pele.
            </p>
            <p>Mais detalhes sobre este par:</p>
            <p class="ms-4">Material: Pele lisa preta</p>
            <p class="ms-4">Forro: Pele</p>
            <p class="ms-4">Palmilha: Alcochoada</p>
            <p class="ms-4">Sola: anti-derrapante de inverno</p>
            <p class="ms-4">Salto: 5 cm</p>
          </div>
        </div>
      </div>

    </section>

  </main>

  <?php include 'partials/footer.php'; ?> <!-- Inclui o footer -->
  <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
  <script>
  const radios = document.querySelectorAll('input[name="inlineRadioOptions"]');
  const image = document.getElementById('mainImage');

  radios.forEach(radio => {
    radio.addEventListener('change', () => {
      if (radio.checked) {
        image.src = radio.value;
      }
    });
  });
</script>

</body>

</html>