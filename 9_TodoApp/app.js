// DOM elements for actions
const input = document.querySelector("#task");
const list = document.querySelector("#list");
const addBtn = document.querySelector("#liveToastBtn");
const toastSucces = document.querySelector("#liveToast");
const toastUnSucces = document.querySelector("#liveToastErr");
// constants for new item generation
const li = document.createElement("li");
const span = document.createElement("span");
let defaultLi = document.getElementsByTagName("li");

// load the page with current data
display();

// Listeners and call-back functions
// default add new todo function
function newElement() {
  if (input.value.trim() != "" && input.value.trim() != " ") {
    // add to document
    span.innerHTML = "X";
    span.classList.add("close");
    li.innerHTML = `<span>${input.value} </span> `;
    li.appendChild(span);
    list.appendChild(li);
    loadStorage(input.value);
    location.reload();
    $(".success").toast("show"); // başarılı başarısız mesajları için toast mesajları
    input.value = "";
  } else {
    $(".error").toast("show");
  }
}
// remove an item from list
list.addEventListener("click", (e) => {
  if (e.target.className === "close") {
    if (confirm("Are you Sure ?")) {
      e.target.parentElement.remove(); // remove from dom
      let prm =
        e.target.parentElement.firstChild.nextElementSibling.textContent.trim();
      deleteStorage(prm); // remove from local
    }
  }
});

// mark as "done" - do NOT remove!
list.addEventListener("click", (e) => {
  e.target.classList.toggle("checked");
});

// Functions for localstorage
// add to local storage
function loadStorage(prm) {
  let storage = JSON.parse(localStorage.getItem("todo"));
  let toDos;
  if (storage == null) {
    toDos = [];
  } else {
    toDos = getStorage();
  }
  toDos.push(prm);
  localStorage.setItem("todo", JSON.stringify(toDos));
}

// remove from local storage
function deleteStorage(prm) {
  let toDo = getStorage();
  // iterate over array and match "id"
  toDo.forEach((element, id) => {
    if (element == prm) {
      toDo.splice(id, 1);
    }
  });
  localStorage.setItem("todo", JSON.stringify(toDo));
}

// pull current local data
function getStorage() {
  let toDo = JSON.parse(localStorage.getItem("todo"));
  return toDo;
}

function display() {
  let toDo = getStorage();
  if (toDo != null) {
    let html;
    // iterate over storage array and format strings for UI
    for (let i = 0; i < toDo.length; i++) {
      html = `<li>
             <span>
             ${toDo[i]}
             </span>
             <span class = "close"> X </span>
             </li>`;
      list.innerHTML += html;
    }
  }
}
