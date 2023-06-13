const dateElement = document.querySelector(".date");

/**
 * @param {Date} date
 */
function formatDate(date) {
    const DAYS = [
        "Minggu",
        "Senin",
        "Selasa",
        "Rabu",
        "Kamis",
        "Jumat",
        "Sabtu"
    ];
    const MONTHS = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Augustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    ];

    return `
    ${DAYS[date.getDay()]},
    ${date.getDate()}
    ${MONTHS[date.getMonth()]} 
    `;
}

const now = new Date();
dateElement.textContent = formatDate(now);


