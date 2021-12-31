// Elements
const avatarFriendOnTitle = document.querySelector('.avatar-and-name-user a img');
const nameFriendOnTitle = document.querySelector('.name-friend h5');
const textChat = document.getElementById('type-mess');
const imageButton = document.getElementById('image-button');
const likeButton = document.getElementById('like-button');
const form = document.querySelector(".input"),
incoming_id = form.querySelector(".incoming_id").value,
inputField = form.querySelector(".input-field"),
sendBtn = form.querySelector(".send-btn"),
chatBox = document.getElementById('chatBox');
chat = document.querySelector('.box-show-mess');

form.onsubmit = (e)=>{
    e.preventDefault();
}

// ===================================
// Disable button whenever a text field is empty dynamically
function success() {
    if (textChat.value === "") {
        document.getElementById('like-button').style.display = "block";
        document.getElementById('image-button').style.display = "block";
        document.getElementById('send-button').style.display = "none";
        textChat.style.width = "80%";
    }
    else {
        document.getElementById('like-button').style.display = "none";
        document.getElementById('image-button').style.display = "none";
        document.getElementById('send-button').style.display = "block";
        textChat.style.width = "87%";
    }
}


// ===================================
// SEND MESS WHEN TAP ENTER
textChat.addEventListener("keyup", function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById('send-button').click();
        success();
    }
});

// ===================================
sendBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              inputField.value = "";
              scrollToBottom();
              success();
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

// ===================================
setInterval(() =>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
            let data = xhr.response;
            chatBox.innerHTML = data;
            if(!chatBox.classList.contains("active")){
                success();
              }
          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);
}, 500);

// ===================================
function scrollToBottom() {
	chat.scrollTop = chat.scrollHeight;
}
  