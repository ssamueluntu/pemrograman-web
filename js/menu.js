const togglemenu = document.querySelector(".menu-toggle");
const sidebar = document.querySelector(".sidebar");
const content = document.querySelector(".content")

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


const btnCreate = document.getElementById("btn-create")
const btnHome = document.getElementById("btn-home")
const btnMyTask = document.getElementById("btn-mytask")
const btnChat = document.getElementById("btn-chat")
const btnReport = document.getElementById("btn-report")

const contentCreate = document.getElementById('create-content')
const contentTask = document.getElementById('container-task')
const contentChat = document.getElementById('container-chat')
const contentHome = document.getElementById('container-home')
const contentReport = document.getElementById('container-report')


btnCreate.addEventListener("click", function () {
    contentCreate.style.display = "flex";
    contentHome.style.display = "none";
    contentChat.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "none";
});

btnHome.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "flex";
    contentChat.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "none";
});
btnChat.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentChat.style.display = "flex";
    contentTask.style.display = "none";
    contentReport.style.display = "none";
});
btnMyTask.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentChat.style.display = "none";
    contentTask.style.display = "flex";
    contentReport.style.display = "none";
});
btnReport.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentChat.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "flex";
});

// Home
const btnUpcoming = document.getElementById("btn-upcoming")
const btnOverdue = document.getElementById("btn-overdue")
const btnComplete = document.getElementById("btn-complete")

const upComing = document.querySelector(".wrapper-upcoming")
const overdue = document.querySelector(".wrapper-overdue")
const complete = document.querySelector(".wrapper-complete")

btnUpcoming.addEventListener("click", function () {
    upComing.style.display = "block";
    overdue.style.display = "none";
    complete.style.display = "none";
});

btnOverdue.addEventListener("click", function () {
    upComing.style.display = "none";
    overdue.style.display = "block";
    complete.style.display = "none";
});

btnComplete.addEventListener("click", function () {
    upComing.style.display = "none";
    overdue.style.display = "none";
    complete.style.display = "block";
});