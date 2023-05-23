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

// Menu
const btnCreate = document.getElementById("btn-create")
const btnHome = document.getElementById("btn-home")
const btnMyTask = document.getElementById("btn-mytask")
const btnChat = document.getElementById("btn-chat")
const btnReport = document.getElementById("btn-report")
const btnNotif = document.getElementById("btn-notif")

const contentCreate = document.getElementById('container-content')
const contentHome = document.getElementById('container-home')
const contentTask = document.getElementById('container-task')
const contentChat = document.getElementById('container-chat')
const contentReport = document.getElementById('container-reporting')
const contentReminder = document.getElementById('container-notif')



btnCreate.addEventListener("click", function () {
    contentCreate.style.display = "block";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "none";
    contentChat.style.display = "none";
    contentReminder.style.display = "none";
});
btnHome.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "block";
    contentTask.style.display = "none";
    contentReport.style.display = "none";
    contentReminder.style.display = "none";
    contentChat.style.display = "none";
});
btnMyTask.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "block";
    contentReport.style.display = "none";
    contentReminder.style.display = "none";
    contentChat.style.display = "none";
});
btnChat.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReminder.style.display = "none";
    contentReport.style.display = "none";
    contentChat.style.display = "block";
});
btnReport.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "block"
    contentReminder.style.display = "none";
    contentChat.style.display = "none";
});
btnNotif.addEventListener("click", function () {
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "none"
    contentReminder.style.display = "block";
    contentChat.style.display = "none";
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