const togglemenu = document.querySelector(".menu-toggle");
const sidebar = document.querySelector(".sidebar");
const content = document.querySelector(".content");

togglemenu.addEventListener("click", function () {
    sidebar.classList.toggle("active");
});

let list = document.querySelectorAll(".aside-item");
for (let i = 0; i < list.length; i++) {
    list[i].addEventListener("click", function () {
        let j = 0;
        while (j < list.length) {
            list[j++].className = "aside-item";
        }
        list[i].className = "aside-item active";
    });
}


// Menu
const btnCreate = document.getElementById("btn-create")
const btnHome = document.getElementById("btn-home")
const btnMyTask = document.getElementById("btn-mytask")
const btnReport = document.getElementById("btn-report")
const btnImage = document.getElementById("btn-image")

const contentCreate = document.getElementById('container-content')
const contentHome = document.getElementById('container-home')
const contentTask = document.getElementById('container-task')
const contentReport = document.getElementById('container-reporting')
const contentImage = document.getElementById('container-image')



btnCreate.addEventListener("click", function () {
    document.title = 'CITA | Create Task'
    contentCreate.style.display = "block";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "none";
    contentImage.style.display = "none";
});
btnHome.addEventListener("click", function () {
    document.title = 'CITA | Home'
    contentCreate.style.display = "none";
    contentHome.style.display = "block";
    contentTask.style.display = "none";
    contentReport.style.display = "none";
    contentImage.style.display = "none";
});
btnMyTask.addEventListener("click", function () {
    document.title = 'CITA | My Task'
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "block";
    contentReport.style.display = "none";
    contentImage.style.display = "none";
});
btnReport.addEventListener("click", function () {
    document.title = 'CITA | Reporting'
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "block"
    contentImage.style.display = "none";
});
btnImage.addEventListener("click", function () {
    document.title = 'CITA | Reminder'
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "none"
    contentImage.style.display = "block";
});




// Home
const btnUpcoming = document.getElementById("btn-upcoming")
const btnComplete = document.getElementById("btn-complete")

const upComing = document.querySelector(".wrapper-upcoming")
const complete = document.querySelector(".wrapper-complete")

btnUpcoming.addEventListener("click", function () {
    upComing.style.display = "block";
    complete.style.display = "none";
});

btnComplete.addEventListener("click", function () {
    upComing.style.display = "none";
    complete.style.display = "block";
});

