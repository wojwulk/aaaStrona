function validateLogin() {

    const username = document.getElementById("loginUsername").value.trim();
    const password = document.getElementById("loginPassword").value.trim();
    const error = document.getElementById("loginError");

    if (username === "" || password === "") {
        error.textContent = "Wypełnij wszystkie pola.";
        return false;
    }

    return true;
}

function validateRegister() {

    const username = document.getElementById("registerUsername").value.trim();
    const password = document.getElementById("registerPassword").value.trim();
    const repeatPassword = document.getElementById("repeatPassword").value.trim();

    const error = document.getElementById("registerError");

    if (username === "" || password === "" || repeatPassword === "") {
        error.textContent = "Wypełnij wszystkie pola.";
        return false;
    }

    if (password.length < 4) {
        error.textContent = "Hasło musi mieć minimum 4 znaki.";
        return false;
    }

    if (password !== repeatPassword) {
        error.textContent = "Hasła nie są takie same.";
        return false;
    }

    return true;
}