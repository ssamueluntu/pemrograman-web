

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