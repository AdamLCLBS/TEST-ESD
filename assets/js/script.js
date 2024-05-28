
    function calculateScore() {
  

    let bonne_reponse = {
        'question_1': 'Jack_Wayman',
        'question_2': '1967',
        'question_3': 'New_York',
        'question_4': 'DVD',
        'question_5': 'Keynotes'
    };

    let score = 0;
    for (let question in bonne_reponse) {
        const selectedOption = document.querySelector(`input[name="${question}"]:checked`);
        if (selectedOption && selectedOption.value === bonne_reponse[question]) {
            score++;
        }
    }

    // J'actualise le input type hideen 
    document.getElementById('scoreInput').value = score;

}