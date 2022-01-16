const nameArea = document.querySelector("#myName");
const timeArea = document.querySelector("#myClock");

// Name
const userName = prompt("İsminiz nedir ?");
nameArea.innerText = `${userName}`;

// Time and Day
const time = new Date().toLocaleTimeString();

setInterval(() => {
  let date = new Date();
  const days = [
    "Pazar",
    "Pazartesi",
    "Salı",
    "Çarşamba",
    "Perşembe",
    "Cuma",
    "Cumartesi",
  ];

  let day = date.getDay();

  timeArea.innerHTML = date.toLocaleTimeString() + " " + days[day];
}, 1000);
