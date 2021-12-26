// Elements
const windownWhenNoChoice = document.querySelector('.box-chat-none-select');
const windownWhenChoice = document.querySelector('.box-chat-friend-select');
const avatarFriendOnTitle = document.querySelector('.avatar-and-name-user a img');
const nameFriendOnTitle = document.querySelector('.name-friend h5');
const textChat = document.getElementById('type-mess');
const imageButton = document.getElementById('image-button');
const likeButton = document.getElementById('like-button');

// ===================================
// SHOW INBOX WINDOWN WHEN CHOICE FRIEND
function friendSelect() {
    windownWhenNoChoice.style.display = "none";
    windownWhenChoice.style.display = "block";         
}

// ===================================
//

// ===================================
// Disable button whenever a text field is empty dynamically
function success() {
    if (textChat.value === "") {
        document.getElementById('like-button').style.display = "block";
        document.getElementById('image-button').style.display = "block";
        document.getElementById('send-button').style.display = "none";
        textChat.style.width = "80%";
    } else {
        document.getElementById('like-button').style.display = "none";
        document.getElementById('image-button').style.display = "none";
        document.getElementById('send-button').style.display = "block";
        textChat.style.width = "87%";
    }
}

// ===================================
// SEND MESS WHEN TAP ENTER
// textChat.addEventListener("keyup", function(event) {
//     if (event.key === 'Enter') {
//         event.preventDefault();
//         document.getElementById('send-button').click();
//         success();
//     }
// });