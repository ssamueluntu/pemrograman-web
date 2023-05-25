// // Get Started
const btnAbout = document.getElementById('btn-about');
const btnStarted = document.getElementById('btn-started');

const contentAbout = document.getElementById('content-about');
const contentStart = document.getElementById('content-start');

btnAbout.addEventListener("click", function () {
    document.title = 'About'
    contentAbout.style.display = "block";
    contentStart.style.display = "none";
});

btnStarted.addEventListener("click", function () {
    contentAbout.style.display = "none";
    contentStart.style.display = "block";
});
