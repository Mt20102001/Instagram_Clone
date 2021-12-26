usersList = document.querySelector(".users-list");
continueBtn = document.querySelector(".send-btn");
var send = true;


continueBtn.onclick = ()=>{
  send = true;
}

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "php/users.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
      }
    }
  }
  if (send) {
    xhr.send();
    send = false;
  }
}, 500);

