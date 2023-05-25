// Login
const btnSignUp = document.querySelector('.signup-link')
const btnLogin = document.querySelector('.login-link')

const loginBox = document.querySelector('.login-box')
const signUpBox = document.querySelector('.signup-box')

btnSignUp.addEventListener("click", function () {
    document.title = 'CITA | Sign Up'
    loginBox.style.display = "none";
    signUpBox.style.display = "block";
});
btnLogin.addEventListener("click", function () {
    document.title = 'CITA | Login'
    loginBox.style.display = "block";
    signUpBox.style.display = "none";
});


// Fungsi autentikasi for login 
function validate() {
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  if (username == "") {
      alert("Username harus di isi")
  } else {
      if ( username == "admin" && password == "admin") {
          this.location.href = "profile.html";
      } else {
          alert("alamat email atau password salah");
      }
  }
};
