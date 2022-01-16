const p1 = {
  score: 0,
  button: document.querySelector("#btnPlayer1"),
  display: document.querySelector("#player1-score"),
};

const p2 = {
  score: 0,
  button: document.querySelector("#btnPlayer2"),
  display: document.querySelector("#player2-score"),
};

// other fuctional DOM elements:
const reset = document.querySelector("#reset-score");
const setWinningScore = document.querySelector("#range");

let winningScore = 3; // default winning condition
let isGameover = false;

function updateScores(player, opponent) {
  if (!isGameover) {
    player.score += 1;
    if (player.score === winningScore) {
      isGameover = true;
      player.display.classList.add("winner");
      opponent.display.classList.add("loser");
    }
    player.display.textContent = player.score;
  }
}

setWinningScore.addEventListener("change", () => {
  winningScore = parseInt(setWinningScore.value);
  resetScores();
});

p1.button.addEventListener("click", () => {
  updateScores(p1, p2);
});
p2.button.addEventListener("click", () => {
  updateScores(p2, p1);
});

reset.addEventListener("click", resetScores);

function resetScores() {
  isGameover = false; // reset the game if anyone has winning score
  for (const p of [p1, p2]) {
    p.score = 0;
    p.display.textContent = 0;
    p.display.classList.remove("winner", "loser");
  }
}
