<?php
    session_start();

    if (!isset($_SESSION['user_id'])) {
        header("Location: index.php");
        exit();
    }

    include 'components/header.php';
?>

<body>
    <?php include 'components/navbar.php'; ?>

    <main class="profile-container">
        <div class="profile-content">
            <div class="profile-header">
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                <h2>Perfil de Usuário</h2>
            </div>

            <form id="profile-form" class="form-container" method="post" action="atualizar_perfil.php">
                <input type="hidden" name="profile-id"  value="<?= $_SESSION['user_id']; ?>" readonly />

                <div class="input-container">
                    <label>Nome Completo</label>
                    <input type="text" name="profile-name" value="<?= $_SESSION['user_name']; ?>" readonly required />
                </div>

                <div class="input-container">
                    <label>Email</label>
                    <input type="email" name="profile-email" value="<?= $_SESSION['user_email']; ?>" readonly required />
                </div>

                <div class="input-container input-container-buttons">
                    <button id="edit-button" class="alert show" type="button" onclick="enableEditProfile();">Editar perfil</button>
                    <button id="cancel-button" class="warning hide" type="button" onclick="disableEditProfile();">Cancelar</button>
                    <button id="save-button" class="success hide" type="submit">Salvar</button>
                </div>
            </div>
        </div>
    </main>

    <script src="js/scripts.js"></script>
</body>