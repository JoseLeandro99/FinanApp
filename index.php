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
                <p>Bem vindo! realize o login para continuar.</p>
            </div>

            <form class="form-container" method="post" action="realiza_login.php">
                <div class="input-container">
                    <label>E-mail</label>
                    <input type="email" name="login-email" id="login-email" required />
                </div>

                <div class="input-container">
                    <label>Senha</label>
                    <input type="password" name="login-password" id="login-password" required />
                </div>

                <div class="input-container">
                    <button type="submit" class="alert">Entrar</button>
                </div>
            </div>
        </div>

        <div class="form-message-container">
            <p>Não possui um conta? <a href="cadastro.php">Cadastre-se</a></p>
        </div>
    </main>

    <script src="js/scripts.js"></script>
</body>
</html>