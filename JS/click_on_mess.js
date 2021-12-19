// Elements
const windownWhenNoChoice = document.querySelector('.box-chat-none-select');
const windownWhenChoice = document.querySelector('.box-chat-friend-select');
const avatarFriendOnTitle = document.querySelector('.avatar-and-name-user a img');
const nameFriendOnTitle = document.querySelector('.name-friend h5');
const textChat = document.getElementById('type-mess');
const imageButton = document.getElementById('image-button');
const likeButton = document.getElementById('like-button');

// ===================================
//Get the h5 elements
var avatar = document.querySelectorAll('.side-menu__chat-avatar img');
var spans = document.querySelectorAll('.side-menu__chat-info h5');
var listavar = [];
var roles = [];
var i = 0;
var stt = 0;

//Iterate the elements
for (i = 0; i < spans.length; i++) {
    //fetch textContent and push it to array
    roles.push(spans[i].innerHTML);
    listavar.push(avatar[i].src);
}

// ===================================
// SHOW INBOX WINDOWN WHEN CHOICE FRIEND
function friendSelect() {
    const activeTextarea = document.activeElement;
    stt = activeTextarea.id;

    windownWhenNoChoice.style.display = "none";
    windownWhenChoice.style.display = "block";
    nameFriendOnTitle.innerHTML = roles[stt];
    avatarFriendOnTitle.src = listavar[stt];
}

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
        textChat.style.width = "87.2%";
    }
}

// ===================================
// SEND MESS WHEN CLICK SEN BUTTON
function SendMess() {
    var typeMess = textChat.value;
    var node = document.createElement("div");
    var textnode = document.createTextNode(typeMess);

    textChat.value = '';
    node.appendChild(textnode);
    document.getElementById("myList").appendChild(node);
}

// ===================================
// SEND MESS WHEN TAP ENTER
textChat.addEventListener("keyup", function(event) {
    if (event.key === 'Enter') {
        event.preventDefault();
        document.getElementById("send-button").click();
        success();
    }
});