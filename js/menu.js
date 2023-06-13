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


const contentCreate = document.getElementById('container-content')
const contentHome = document.getElementById('container-home')
const contentTask = document.getElementById('container-task')
const contentReport = document.getElementById('container-reporting')




btnCreate.addEventListener("click", function () {
    document.title = 'CITA | Create Task'
    contentCreate.style.display = "block";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "none";

});
btnHome.addEventListener("click", function () {
    document.title = 'CITA | Home'
    contentCreate.style.display = "none";
    contentHome.style.display = "block";
    contentTask.style.display = "none";
    contentReport.style.display = "none";

});
btnMyTask.addEventListener("click", function () {
    document.title = 'CITA | My Task'
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "block";
    contentReport.style.display = "none";

});
btnReport.addEventListener("click", function () {
    document.title = 'CITA | Reporting'
    contentCreate.style.display = "none";
    contentHome.style.display = "none";
    contentTask.style.display = "none";
    contentReport.style.display = "block"

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



// Image

const btnAddImg = document.getElementById('add-image')
const btnBack = document.getElementById('back')

const formAddImg = document.getElementById('add-form')
const contentImg = document.getElementById('content-image')


btnAddImg.addEventListener("click", function () {
    document.title = 'Tambah gambar'
    formAddImg.style.display = "flex";
    contentImg.style.display = "none";
});
btnBack.addEventListener("click", function () {
    document.title = 'Gambar'
    formAddImg.style.display = "none";
    contentImg.style.display = "block";
});