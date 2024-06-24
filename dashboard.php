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

<link rel="stylesheet" href="css/modal.css" />

<body>
    <?php include 'components/navbar.php'; ?>

    <main class="app-content">
        <div>
            <p>Bem vindo <?= $_SESSION['user_name']?>!</p>
            <p>Suas dispesas e ganhos estão exibidas em ordem crescente, você pode adicionar ou remover novas despesas/ganhos quando quiser.</p>
        </div>

        <div class="list-container">
            <div class="list-container-header">
                <h2>Dispesas mensais</h2>
                <button type="button" onclick="openAddModal();">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
            <div class="list-content">
            <?php
                require("utils/db_connection.php");

                $user_id = $_SESSION['user_id'];
                $registro = mysqli_query($conn, "SELECT id, titulo, descricao, tipo, valor FROM entradas WHERE user_id='$user_id' ORDER BY valor DESC");

                while($reg = mysqli_fetch_array($registro)) {
                    $tipo = $reg[3];

                    if ($tipo === 'Dispesa') {
                        echo '
                        <div class="list-item">
                            <button class="delete-button" onclick="deleteRegister(' .$reg[0] . ');">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            <div class="list-item-details">
                                <label>' .$reg[1] . '</label>
                                <p>' .$reg[2] . '</p>
                                <small>Valor ' .$reg[4] . '</small>
                            </div>
                            <div class="list-item-icon negative">
                                <i class="fa fa-sort-asc" aria-hidden="true"></i>
                            </div>
                        </div>';
                    }
                    
                    if ($tipo === 'Ganho') {
                        echo '
                        <div class="list-item">
                            <button class="delete-button" onclick="deleteRegister(' .$reg[0] . ');">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                            <div class="list-item-details">
                                <label>' .$reg[1] . '</label>
                                <p>' .$reg[2] . '</p>
                                <small>Valor ' .$reg[4] . '</small>
                            </div>
                            <div class="list-item-icon positive">
                                <i class="fa fa-sort-desc" aria-hidden="true"></i>
                            </div>
                        </div>';
                    }                     
                }
            ?>
            </div>
        </div>
    </main>


    <div class="modal-add hide">
        <div class="modal-fade"></div>
        <div class="modal-content">
            <h2>Adicionar nova entrada</h2>
            <button class="close" onclick="closeAddModal(this);">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="content-form">
                <form class="form-container" method="post" action="criar_registro.php">
                    <div class="input-container">
                        <label>Titulo</label>
                        <input type="text" name="register-title" required />
                    </div>

                    <div class="input-container">
                        <label>Descrição</label>
                        <input type="text" name="register-description" required />
                    </div>

                    <div class="input-container">
                        <label>Tipo</label>
                        <select name="register-type" required>
                            <option value="Dispesa">Dispesa</option>
                            <option value="Ganho">Ganho</option>
                        </select>
                    </div>

                    <div class="input-container">
                        <label>Valor</label>
                        <input type="number" name="register-value" required />
                    </div>

                    <div class="input-container">
                        <button type="submit" class="success">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/scripts.js"></script>
</body>
</html>