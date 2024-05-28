document.querySelectorAll(".level-game").forEach((element) => {
    element.addEventListener("change", () => {
        element.closest("tr").querySelector(".max-scores").innerHTML = "";
        element.closest("tr").querySelector(".rounds-game").innerHTML = "";
        element.closest("tr").querySelector(".max-errors").innerHTML = "";
        element.closest("tr").querySelector(".max-time").innerHTML = "";
        element.closest("tr").querySelector(".min-time").innerHTML = "";

        console.log("aprieto el boton");
        let level = element.value;
        console.log(level);

        let gameId = element.closest("tr").querySelector(".game-id").value;
        console.log(gameId);

        if (gameId && level) {
            fetch(`/api/games-parameters`)
                .then((response) => response.json())
                .then((data) => {
                    let parameters = data.filter(
                        (parameter) => parameter.game_id == gameId
                    );
                    let parameter = parameters.find(
                        (parameter) => parameter.level == level
                    );

                    let maxScoresTd = element.closest("tr").querySelector(".max-scores");
                    let roundsGameTd = element.closest("tr").querySelector(".rounds-game");
                    let maxErrorsTd = element.closest("tr").querySelector(".max-errors");
                    let maxTimeTd = element.closest("tr").querySelector(".max-time");
                    let minTimeTd = element.closest("tr").querySelector(".min-time");

                    maxScoresTd.innerHTML = parameter.max_scores;
                    roundsGameTd.innerHTML = parameter.rounds;
                    maxErrorsTd.innerHTML = parameter.max_errors;
                    maxTimeTd.innerHTML = parameter.max_time;
                    minTimeTd.innerHTML = parameter.min_time;
                });
        }
    });
});
