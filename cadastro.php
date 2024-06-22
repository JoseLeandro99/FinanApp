<!DOCTYPE html>
<html lang="pt-br">

<?php
    include 'components/header.php';
?>

<body>
    <main class="app">
        <div class="login-container">
            <header>
                <i class="fa fa-credit-card" aria-hidden="true"></i>
            </header>

            <div class="login-content">
                <h2>Finan APP</h2>
                <p>Preencha os campos abaixo para se cadastrar</p>
            </div>

            <form id="form-registro" class="form-container" method="post" action="realiza_cadastro.php">
                <div class="input-container">
                    <label>Nome</label>
                    <input type="text" name="register-name" id="register-name" required />
                </div>

                <div class="input-container">
                    <label>E-mail</label>
                    <input type="email" name="register-email" id="register-email" required />
                </div>

                <div class="input-container">
                    <label>Senha</label>
                    <input type="password" name="register-password" id="register-password" required />
                </div>

                <div class="input-container">
                    <label>Confirme sua senha</label>
                    <input type="password" name="register-confirm-password" id="register-confirm-password" required />
                </div>

                <div class="input-container">
                    <button type="button" class="alert" onclick="validaRegistro();">Entrar</button>
                </div>
            </div>
        </div>

        <div class="form-message-container">
            <a href="index.php">Realizar login</a>
        </div>
    </main>

    <script src="js/scripts.js"></script>
</body>
</html>