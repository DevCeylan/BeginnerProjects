var drumButtonsCount = document.querySelectorAll(".drum").length;

// Click listeners for each drums
for (let i = 0; i < drumButtonsCount; i++) {
  document.querySelectorAll(".drum")[i].addEventListener("click", function () {
    var button = this.innerHTML;
    playSound(button);
    buttonAnimation(button);
  });
}
// Key press(keydown) listener for drums
document.addEventListener("keydown", function (event) {
  playSound(event.key);
  buttonAnimation(event.key);
});

// both listener types will call the funtion with a string argument which holds the "key" information
function playSound(key) {
  // play function with cases:
  switch (key) {
    case "a":
      var tom1 = new Audio("sounds/tom-1.mp3");
      tom1.play();
      break;
    case "s":
      var tom2 = new Audio("sounds/tom-2.mp3");
      tom2.play();
      break;
    case "d":
      var tom3 = new Audio("sounds/tom-3.mp3");
      tom3.play();
      break;
    case "f":
      var tom4 = new Audio("sounds/tom-4.mp3");
      tom4.play();
      break;
    case "j":
      var kick = new Audio("sounds/kick.wav");
      kick.play();
      break;
    case "k":
      var snare = new Audio("sounds/snare.mp3");
      snare.play();
      break;
    case "l":
      var crash = new Audio("sounds/crash.mp3");
      crash.play();
      break;
      q;
    default:
      break;
  }
}

function buttonAnimation(key) {
  var keyPressed = document.querySelector("." + key); //concat. to get the class name for the key
  //basic keypress animation
  keyPressed.classList.add("pressed");
  setTimeout(function () {
    keyPressed.classList.remove("pressed");
  }, 50);
}
