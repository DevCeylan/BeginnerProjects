// DOM elements:
const p1button = document.querySelector("#btnPlayer1");
const p2button = document.querySelector("#btnPlayer2");

const p1display = document.querySelector("#player1-score");
const p2display = document.querySelector("#player2-score");

let p1Score = 0;
let p2Score = 0;
let winningScore = 5;
let isGameover = false;
// Event Listeners

p1button.addEventListener("click", function () {
  if (!isGameover) {
    p1Score += 1;
    if (p1Score === winningScore) {
      isGameover = true;
    }
    p1display.textContent = p1Score;
  }
});
p2button.addEventListener("click", function () {
  if (!isGameover) {
    p2Score += 1;
    if (p2Score === winningScore) {
      isGameover = true;
    }
    p2display.textContent = p2Score;
  }
});
