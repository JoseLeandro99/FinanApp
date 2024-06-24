function validaRegistro() {
    var registerForm = document.querySelector("#form-registro");

    var password = document.querySelector("#register-password");
    var confirmPassword = document.querySelector("#register-confirm-password");

    if ((password.value !== '' && confirmPassword.value !== '') && password.value !== confirmPassword.value) {
        alert("As senhas não conferem!");
        return;
    }

    if (registerForm.checkValidity()) {
        registerForm.submit();
    }
    else {
        registerForm.reportValidity();
    }
}

function logout() {
    location.href = "logout.php";
}

function openAddModal() {
    var modal = document.querySelector(".modal-add");
    modal.classList.remove('hide');
    modal.classList.add('show');
}

function closeAddModal(element) {
    var modal = element.parentElement.parentElement;
    var form = element.parentElement.children[2].children[0];
    
    form.reset();
    modal.classList.remove('show');
    modal.classList.add('hide');
}

function deleteRegister(itemId) {
    var input = document.createElement('input');
    input.name = 'register-id';
    input.type = 'text';
    input.value = itemId;

    var form = document.createElement('form');
    form.method = 'post';
    form.action = 'deletar_registro.php';
    form.appendChild(input);

    document.body.append(form);
    form.submit();
    form.remove();
}

// Edit Profile Page

var editButton = document.querySelector('#edit-button');
var cancelButton = document.querySelector('#cancel-button');
var saveButton = document.querySelector('#save-button');

var profileForm = document.querySelector("#profile-form");

function enableEditProfile() {
    editButton.classList.add('hide');
    cancelButton.classList.remove('hide');
    saveButton.classList.remove('hide');
    
    ToggleReadyOnlyForm(false);
}

function disableEditProfile() {
    editButton.classList.remove('hide');
    cancelButton.classList.add('hide');
    saveButton.classList.add('hide');
    
    ToggleReadyOnlyForm(true);
}

function ToggleReadyOnlyForm(isReadyOnly) {
    var inputs = profileForm.querySelectorAll('input');
    
    Array.from(inputs).forEach(function(i) {
        if (i.id === '#profile-id') {
            return;
        }

        i.readOnly = isReadyOnly;
    });
}