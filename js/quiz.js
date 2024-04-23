let questionText = document.getElementById("question-area");
let checkedOption;

function getRadioButtonValue($radio){
    let value = $radio.value;
    console.log("RadioButton value = "+value);
}

function updateQuestion(idx){
    questionIndex = idx;
    let questionTextPHP = String(questionArray[idx].question);
    questionText.textContent = questionTextPHP;
}

function recordAnswer(idx){
    checkedOption = idx;
}

function sendUserResponse(){
    const itemResponseObject = {
        itemNumber : questionIndex,
        itemQuestion : questionText.textContent,
        itemCheckedOption : answerArray[checkedOption].option,
        itemCheckedBoolean : answerArray[checkedOption].isTrue
    };
    const userItemResponse = JSON.stringify(itemResponseObject);
    console.log(JSON.parse(userItemResponse));
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "quiz.php");
    xhr.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    xhr.onload = function(){
        if (xhr.readyState == 4 && xhr.status == 201) {
            console.log(JSON.parse(xhr.responseText));
        } else {
            console.log(`Error: ${xhr.status}`);
        }
    }
    xhr.send(userItemResponse);
}