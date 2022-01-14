<<<<<<< HEAD
usersList = document.querySelector(".users-list");


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
  xhr.send();
}, 500);

=======
usersList = document.querySelector(".users-list");


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
  xhr.send();
}, 500);

>>>>>>> master
