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