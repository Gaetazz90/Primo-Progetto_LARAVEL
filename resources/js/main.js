// Funzione mostra/nascondi password nei form di registrazione/login

let passwordInput = document.querySelector("#password");
let openeye = document.querySelector("#openeye");
let closedeye = document.querySelector("#closedeye");

function showPassword() {    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        openeye.style.display = "none";
        closedeye.style.display = "inline";
    } else {
        passwordInput.type = "password";
        openeye.style.display = "inline";
        closedeye.style.display = "none";
    }
}

let eyeicon = document.querySelector("#eyeicon")

eyeicon.addEventListener("click", showPassword)

