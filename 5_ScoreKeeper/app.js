// DOM elements:
const p1button = document.querySelector("#btnPlayer1");
const p2button = document.querySelector("#btnPlayer2");
const reset = document.querySelector("#reset-score");
const setWinningScore = document.querySelector("#range");

const p1display = document.querySelector("#player1-score");
const p2display = document.querySelector("#player2-score");

let p1Score = 0;
let p2Score = 0;
let winningScore = 3; // default winning condition
let isGameover = false;
// Event Listeners

setWinningScore.addEventListener("change", () => {
  winningScore = parseInt(setWinningScore.value);
  resetScores();
});

p1button.addEventListener("click", function () {
  if (!isGameover) {
    p1Score += 1;
    if (p1Score === winningScore) {
      isGameover = true;
      p1display.classList.add("winner");
      p2display.classList.add("loser");
    }
    p1display.textContent = p1Score;
  }
});
p2button.addEventListener("click", function () {
  if (!isGameover) {
    p2Score += 1;
    if (p2Score === winningScore) {
      isGameover = true;
      p2display.classList.add("winner");
      p1display.classList.add("loser");
    }
    p2display.textContent = p2Score;
  }
});

reset.addEventListener("click", resetScores);

function resetScores() {
  isGameover = false; // reset the game if anyone has winning score
  p1Score = 0;
  p2Score = 0;
  p1display.textContent = p1Score;
  p2display.textContent = p2Score;
  p2display.classList.remove("winner", "loser");
  p1display.classList.remove("winner", "loser");
}
