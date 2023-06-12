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