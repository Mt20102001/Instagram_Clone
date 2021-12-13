// Elements
const windownWhenNoChoice = document.querySelector('.box-chat-none-select');
const windownWhenChoice = document.querySelector('.box-chat-friend-select');
const nameFriendOnTitle = document.querySelector(".name-friend h5")

// ===================================
//Get the h5 elements
var spans = document.querySelectorAll(".side-menu__chat-info h5");
var roles = [];
var i = 0;
//Iterate the elements
for (i = 0; i < spans.length; i++) {
  //fetch textContent and push it to array
  roles.push(spans[i].innerHTML);
}

// ===================================
// SHOW INBOX WINDOWN WHEN CHOICE FRIEND
function friendSelect() {
    windownWhenNoChoice.style.display="none";
    windownWhenChoice.style.display="block";
    nameFriendOnTitle.innerHTML = roles[0];
}
