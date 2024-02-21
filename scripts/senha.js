function togglePasswordVisibility() {
        var passwordInput = document.getElementById("senha");
        var showPasswordCheckbox = document.getElementById("showPassword");

        // Alterna entre "password" e "text" com base no estado da checkbox
        passwordInput.type = showPasswordCheckbox.checked ? "text" : "password";
    }