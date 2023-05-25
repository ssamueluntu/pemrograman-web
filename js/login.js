// Login
const btnSignUp = document.querySelector('.signup-link')
const btnLogin = document.querySelector('.login-link')

const loginBox = document.querySelector('.login-box')
const signUpBox = document.querySelector('.signup-box')

btnSignUp.addEventListener("click", function () {
    loginBox.style.display = "none";
    signUpBox.style.display = "block";
});
btnLogin.addEventListener("click", function () {
    loginBox.style.display = "block";
    signUpBox.style.display = "none";
});
