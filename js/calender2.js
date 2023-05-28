// Mendapatkan referensi ke elemen input-date-from dan input-date-to
var inputDateFrom = document.getElementById('input-date-from');
var inputDateTo = document.getElementById('input-date-to');

const popup = document.getElementById("pop-up")

// Fungsi untuk membuka pop-up kalender
function openPopup() {
    popup.classList.add("open-popup")
}

// Fungsi untuk menutup pop-up kalender
function closePopup() {
    popup.classList.remove("open-popup")
}


// Fungsi untuk memasukkan tanggal terpilih ke input-date-from atau input-date-to
function selectDate(date) {
    if (inputDateFrom.value === '') {
        inputDateFrom.value = date;
        closePopup();
    } else if (inputDateTo.value === '') {
        inputDateTo.value = date;
        closePopup();
    }else {
        inputDateFrom.value = '';
        inputDateTo.value = '';
        inputDateFrom.focus();
        inputDateTo.focus();
      }
}

// Memperoleh elemen hari saat ini
var currentDate = new Date();
var currentYear = currentDate.getFullYear();
var currentMonth = currentDate.getMonth();
var currentDay = currentDate.getDate();

// Memperoleh elemen kalender
var calendarDays = document.querySelector('.calendar-days');

// Membuat kalender dengan menggunakan bulan dan tahun saat ini
function generateCalendar(year, month) {
    var calendarDaysHTML = '';

    // Mendapatkan tanggal pertama dari bulan dan tahun yang diberikan
    var firstDay = new Date(year, month, 1);
    var startingDay = firstDay.getDay();

    // Mendapatkan jumlah hari dalam bulan yang diberikan
    var lastDay = new Date(year, month + 1, 0);
    var totalDays = lastDay.getDate();

    // Menambahkan hari-hari sebelum tanggal pertama bulan saat ini
    for (var i = 0; i < startingDay; i++) {
        calendarDaysHTML += '<div class="calendar-day disabled"></div>';
    }

    // Menambahkan hari-hari dalam bulan saat ini
    for (var day = 1; day <= totalDays; day++) {
        var calendarDayClass = 'calendar-day';
        if (year === currentYear && month === currentMonth && day === currentDay) {
            calendarDayClass += ' current-day';
        }
        calendarDaysHTML += '<div class="' + calendarDayClass + '" onclick="selectDate(\'' + month + '/' + day + '/' + year + '\')">' + day + '</div>';
    }

    // Menambahkan hari-hari setelah tanggal terakhir bulan saat ini
    for (var j = 0; j < 42 - (startingDay + totalDays); j++) {
        calendarDaysHTML += '<div class="calendar-day disabled"></div>';
    }

    // Menampilkan kalender
    calendarDays.innerHTML = calendarDaysHTML;
}

// Inisialisasi kalender dengan bulan dan tahun saat ini
generateCalendar(currentYear, currentMonth);

// Fungsi untuk mengubah bulan dan tahun pada kalender
function changeMonthYear(month, year) {
    var monthPicker = document.getElementById('month-picker');
    var yearPicker = document.getElementById('year');

    // Mengubah bulan dan tahun pada tampilan kalender
    monthPicker.textContent = getMonthName(month);
    yearPicker.textContent = year;

    // Menghasilkan kalender dengan bulan dan tahun yang baru
    generateCalendar(year, month);
}

// Fungsi untuk mendapatkan nama bulan berdasarkan indeks
function getMonthName(month) {
    var monthNames = [
        'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
    ];
    return monthNames[month];
}

// Tombol untuk mengubah ke bulan sebelumnya
var prevYearButton = document.getElementById('prev-year');
prevYearButton.addEventListener('click', function () {
    currentYear--;
    changeMonthYear(currentMonth, currentYear);
});

// Tombol untuk mengubah ke bulan berikutnya
var nextYearButton = document.getElementById('next-year');
nextYearButton.addEventListener('click', function () {
    currentYear++;
    changeMonthYear(currentMonth, currentYear);
});