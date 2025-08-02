<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ros Lisbon Website - Contactos</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'partials/navbar.php'; ?> <!-- Inclui a navbar -->

    <main>
        <section class="container-fluid">
            <div class="contact-section">
                <div class="row justify-content-center text-center">
                    <div class="col-12">
                        <h1>Contactos</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-12 col-lg-4">
                            <div class="card contact-card text-center">
                                <div class="card-body">
                                    <h5 class="contact-title">E-mail</h5>
                                    <p class="contact-text">info@roslisbon.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card contact-card text-center">
                                <div class="card-body">
                                    <h5 class="contact-title">Telemóvel</h5>
                                    <p class="contact-text">+351 912 357 789*</p>
                                    <p class="info-text">*(Chamada para rede móvel nacional)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="card contact-card text-center">
                                <div class="card-body">
                                    <h5 class="contact-title">Morada</h5>
                                    <p class="contact-text">Showroom em Sacavém</p>
                                    <p class="info-text">(a 5 min. do CC Vasco da Gama)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mb-2">
                    <h4 class="mt-4 mb-2">No Instagram</h4>
                </div>
                <div class="row row-cols-3 row-cols-md-3 row-cols-lg-6 g-3 justify-content-between">
                    <div class="col">
                        <img src="assets/images/contactosinsta1.jpg" class="img-fluid" alt="Botas Ros Lisbon">
                    </div>
                    <div class="col">
                        <img src="assets/images/contactosinsta2.jpg" class="img-fluid" alt="Imagem pormenor de botas Ros Lisbon">
                    </div>
                    <div class="col">
                        <img src="assets/images/contactosinsta3.jpg" class="img-fluid" alt="Imagem conjunto de roupa conjugado com botas Ros Lisbon">
                    </div>
                    <div class="col">
                        <img src="assets/images/contactosinsta4.jpg" class="img-fluid" alt="Imagem de modelo num parque">
                    </div>
                    <div class="col">
                        <img src="assets/images/contactosinsta5.jpg" class="img-fluid" alt="Imagem de balões">
                    </div>
                    <div class="col">
                        <img src="assets/images/contactosinsta6.jpg" class="img-fluid" alt="Imagem de pormenor de modelo a usar botas Ros Lisbon">
                    </div>
                </div>
            </div>
        </section>

        <?php
            // Processamento do formulário de contato
            $errors = [];
            $success = '';

            // Apenas processa se for o formulário de contato (identificado pelo campo oculto "form_type")
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['form_type']) && $_POST['form_type'] === 'contacto') {
                $nome = trim($_POST['nome'] ?? '');
                $email = trim($_POST['email'] ?? '');
                $mensagem = trim($_POST['mensagem'] ?? '');
                $termos = isset($_POST['termos']);

                if (empty($nome)) {
                    $errors[] = 'O campo Nome é obrigatório.';
                }
                if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $errors[] = 'O e-mail indicado não é válido.';
                }
                if (empty($mensagem)) {
                    $errors[] = 'O campo Mensagem é obrigatório.';
                }
                if (!$termos) {
                    $errors[] = 'O campo Aceitar a Política de Privacidade é obrigatório.';
                }

                if (empty($errors)) {
                    $success = "Mensagem enviada com sucesso!";
                }
            }
        ?>

        <section class="container-fluid">
            <div class="post-container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6">
                        <h1>Entre em contacto connosco</h1>
                    </div>
                    <div class="col-12 col-lg-6">
                        <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <?php foreach ($errors as $error): ?>
                            <p><?= htmlspecialchars($error); ?></p>
                            <?php endforeach; ?>
                        </div>
                        <?php endif; ?>

                        <?php if ($success): ?>
                        <div class="alert alert-success">
                            <?= htmlspecialchars($success); ?>
                        </div>
                        <?php endif; ?>

                        <form action="#" method="post">
                            <input type="hidden" name="form_type" value="contacto">
                            <div class="mb-3">
                                <label for="InputName" class="form-label">Nome*</label>
                                <input type="text" class="form-control" id="InputName" name="nome" aria-describedby="Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="InputEmail" class="form-label">E-mail*</label>
                                <input type="email" class="form-control" id="InputEmail" name="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Mensagem*</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="mensagem" rows="3" required></textarea>
                                <p>* Campos de preenchimento obrigatório</p>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="termos">
                                <label class="form-check-label" for="exampleCheck1">
                                    Li e aceito a <a href="#" class="footer-link mt-2">Política de Privacidade</a>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-outline-success">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'partials/newsletter.php'; ?> <!-- Inclui o formulário de newsletter -->
    <?php include 'partials/footer.php'; ?> <!-- Inclui o footer -->

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
