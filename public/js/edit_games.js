function handleLevelChange() {
    let gameId = document.getElementById('game_id').value;
    let level = document.getElementById('level').value;

    document.getElementById('max_scores').innerHTML = '';
    document.getElementById('rounds').innerHTML = '';
    document.getElementById('max_errors').innerHTML = '';
    document.getElementById('max_time').innerHTML = '';
    document.getElementById('min_time').innerHTML = '';



    if (gameId && level) {
        fetch(`/api/games-parameters`)
            .then(response => response.json())
            .then(data => {
                let parameters = data.filter(parameter => parameter.game_id == gameId);
                let parameter = parameters.find(parameter => parameter.level == level);

                document.getElementById('max_scores').value = parameter.max_scores;
                document.getElementById('rounds').value = parameter.rounds;
                document.getElementById('max_errors').value = parameter.max_errors;
                document.getElementById('max_time').value = parameter.max_time || ''; 
                document.getElementById('min_time').value = parameter.min_time || '';
            });
    }
}

document.getElementById('level').addEventListener('change', handleLevelChange);