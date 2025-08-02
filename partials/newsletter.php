<?php
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['newsletter_form'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        $msg = "E-mail inválido!";
    } else {
        $msg = "E-mail Gravado. Obrigado " . htmlspecialchars($email);
    }
}
?>
<div class="container-fluid newsletter-container">
    <?php if ($msg): ?>
    <div class="alert alert-warning">
        <?= $msg; ?>
    </div>
    <?php endif; ?>
    <!-- Resto do conteúdo do formulário -->
    <div class="row align-items-center">
        <div class="col-12 col-lg-5 offset-lg-1 my-4 title-padding">
            <h4 style="color: #ffffff;">Assine a nossa Newsletter</h4>
        </div>
        <div class="col-12 col-lg-4 offset-lg-2 mx-auto my-4 padding-right">
            <form action="#" method="post">
                <!-- Campo oculto para identificar o formulário da newsletter -->
                <input type="hidden" name="newsletter_form" value="1">
                <label for="exampleFormControlInput1">Inserir Email</label>
                <div class="input-group">
                    <input type="email" name="email" class="form-control form-control-sm" id="exampleFormControlInput1" required placeholder="name@example.com">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa-solid fa-arrow-right fa-xs" style="color: #ffffff;"></i>
                    </button>
                </div>
            </form>
            <p class="form-text">Não partilhamos o seu email com terceiros.</p>
        </div>
    </div>
</div>
