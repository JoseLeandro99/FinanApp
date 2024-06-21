<!DOCTYPE html>
<html lang="pt-br">

<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit();
    }

    include 'components/header.php';
?>

<body>
    <nav class="navbar">
        <i class="fa fa-credit-card" aria-hidden="true"></i>
        <button type="button" onclick="logout();">
            Sair <i class="fa fa-sign-in" aria-hidden="true"></i>
        </button>
    </nav>

    <main class="app-content">
        <div>
            <p>Bem vindo <?= $_SESSION['user_name']?>!</p>
            <p>Suas dispesas estão exibidas em ordem crescente, você pode adicionar ou remover despesas quando quiser.</p>
        </div>

        <div class="list-container">
            <h2>Dispesas mensais</h2>
            <div class="list-content">
                <div class="list-item">
                    <div class="list-item-details">
                        <label>Titulo</label>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae optio officia nesciunt! Perferendis hic provident</p>
                    </div>
                    <div class="list-item-icon negative">
                        <!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> -->
                        <i class="fa fa-sort-asc" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="list-item">
                    <div class="list-item-details">
                        <label>Titulo</label>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae optio officia nesciunt! Perferendis hic provident</p>
                    </div>
                    <div class="list-item-icon positive">
                        <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <!-- <i class="fa fa-sort-asc" aria-hidden="true"></i> -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="js/scripts.js"></script>
</body>
</html>