const btnSemua = document.getElementById("btn-semua")
const btnPribadi = document.getElementById("btn-pribadi")
const btnTugas = document.getElementById("btn-tugas")
const btnKelompok = document.getElementById("btn-kelompok")

const semua = document.getElementById("semua")
const tugas = document.getElementById("tugas")
const pribadi = document.getElementById("pribadi")
const kelompok = document.getElementById("kelompok")

btnSemua.addEventListener("click", function () {
    semua.style.display = "block";
    tugas.style.display = "none";
    pribadi.style.display = "none";
    kelompok.style.display = "none";
});
btnPribadi.addEventListener("click", function () {
    semua.style.display = "none";
    pribadi.style.display = "block";
    tugas.style.display = "none";
    kelompok.style.display = "none";
});
btnTugas.addEventListener("click", function () {
    semua.style.display = "none";
    pribadi.style.display = "none";
    tugas.style.display = "block";
    kelompok.style.display = "none";
});
btnKelompok.addEventListener("click", function () {
    semua.style.display = "none";
    pribadi.style.display = "none";
    tugas.style.display = "none";
    kelompok.style.display = "block";
});





// Ambil elemen-elemen yang diperlukan
const filterLinks = document.querySelectorAll('.task-menu ul li a');
const tableRows = document.querySelectorAll('#table-task tbody tr');

// Tambahkan event listener pada setiap link filter
filterLinks.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();

        // Dapatkan jenis filter yang dipilih
        const filterType = this.textContent.toLowerCase();

        // Hapus kelas "active" dari semua link filter
        filterLinks.forEach(link => link.classList.remove('active'));

        // Tambahkan kelas "active" pada link filter yang dipilih
        this.classList.add('active');

        // Tampilkan atau sembunyikan baris tabel berdasarkan filter yang dipilih
        tableRows.forEach(row => {
            const projectCell = row.querySelector('.project-header');
            const projectType = projectCell.textContent.toLowerCase();

            if (filterType === 'semua' || filterType === projectType) {
                row.style.display = 'table-row';
            } else {
                row.style.display = 'none';
            }
        });
    });
});