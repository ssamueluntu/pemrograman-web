function send() {
    const message = document.getElementById("input-message").value;
    if (message.trim() === "") return; // cek apakah pesan kosong
  
    // membuat element chat baru
    var newChat = document.createElement("div");
    newChat.className = "chat my-chat";
    newChat.innerHTML = `
        <div id="my-chat" class="item-chat me">
        <span>${message}</span>
        </div>
        <img src="../img/laki.png" alt="">
        `;
  
    // menambahkan element chat baru ke dalam box-chat
    var boxChat = document.getElementById("box-chat");
    boxChat.insertBefore(newChat, boxChat.lastElementChild);
  
    // reset input message
    document.getElementById("input-message").value = "";
  }