
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})


function countAnswer(questionId, dimensionId, count) {
    // Obtener el número total de preguntas y el número de preguntas respondidas
    var totalQuestions = count;
    var answeredQuestions = document.querySelectorAll(`input[id^='answers${dimensionId}']:checked`).length;
    console.log(totalQuestions + ' ' + answeredQuestions);
    // Actualizar el contador
    document.getElementById(`counter_${dimensionId}`).innerText = `${answeredQuestions} / ${totalQuestions}`;
}