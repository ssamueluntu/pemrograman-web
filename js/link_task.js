function buatTask() {
    // untuk menangkap  elemen html 
    const bikinTask = document.getElementById('masukkan-task').value;
    const pilihanTask = document.getElementById('opsi-tugas').value
    const tglFrom = document.getElementById('input-date-from').value
    const tglTo = document.getElementById('input-date-to').value
    if (bikinTask.trim() === "") return;

    // buat element task baru 
    let taskBaru = document.createElement('tr')
    taskBaru.id = 'task-baru';
    taskBaru.innerHTML = `
    <td class="col-satu">
        <input type="checkbox">
        <span>${bikinTask}</span>
    </td>
    <td class="col-dua">${tglTo}</td>
    <td class="col-tiga">${pilihanTask}</td>`;

    let tabelTask = document.getElementById('table-task');
    tabelTask.insertBefore(taskBaru, tabelTask.firstElementChild);

    // reset input task
    document.getElementById('masukkan-task').value = "";
    document.getElementById('opsi-tugas').value = "Tugas";
    document.getElementById('input-date-from').value = "";
    document.getElementById('input-date-to').value = "";
}