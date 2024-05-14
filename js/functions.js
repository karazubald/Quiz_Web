let itemObject = new Object();
let userResponseJSON = new Object();

/**
 * Initialize a json object from the server as object.
 * @param {Object} serverObject an object from server.
 */
function initItemObject(serverObject){
    itemQuantity = Object.keys(serverObject).length;
    for (let index = 0; index < itemQuantity; index++) {
        itemObject[index] = {
            question: serverObject[index].question,
            options: new Object()
        }
        optionsQuantity = Object.keys(serverObject[index].options).length;
        for (let optionIndex = 0; optionIndex < optionsQuantity; optionIndex++) {
            itemObject[index].options[optionIndex] = serverObject[index].options[optionIndex];
        }
    }
    initUserResponse();
}

/**
 * Initialize an object to record user answers.
 */
function initUserResponse(){
    for (let index = 0; index < Object.keys(itemObject).length; index++) {
        userResponseJSON[index] = {
            question: itemObject[index].question,
            checkedOption: "",
            optionText: ""
        }
    }
}

/**
 * Get the item question based on index.
 * @param {Number} index An integer starting from 0.
 * @returns Item's question in string format.
 */
function getItemQuestion(index){
    let itemNumber = Number(index + 1);
    let itemText = itemObject[index].question;
    let itemQuestion = String(itemNumber) + ". " + itemText;
    return itemQuestion;
}

/**
 * Generate index number along with questions and options.
 * @param {String} radioGroupNameReference 
 */
function generateQuestionIndex(radioGroupNameReference) {
    let fragment = new DocumentFragment();
    let idRef = "question-idx";
    let iterationLimit = Object.keys(itemObject).length;
    let radioIdentity = "q-";

    for (let index = 0; index < iterationLimit; index++) {
        let correctedIndex = index+1;
        let radioInputElement = document.createElement("input");
        let radioLabel = document.createElement("label");

        radioInputElement.setAttribute("type", "radio");
        radioInputElement.setAttribute("name", radioGroupNameReference);
        radioInputElement.setAttribute("id", radioIdentity+correctedIndex);
        radioInputElement.setAttribute("value", index);
        radioLabel.setAttribute("for", radioIdentity+correctedIndex);
        radioLabel.textContent = correctedIndex;

        let divEl = document.createElement("div");
        radioInputElement.addEventListener("change",() => {
            let questionArea = document.getElementById("question-area");
            let questIndex = Number(radioInputElement.getAttribute("id").replace(radioIdentity,"")) - 1;
            questionArea.textContent = itemObject[questIndex].question;
            generateOptions(questIndex);

            let allAnswerRadio = document.getElementsByName("answerGroup");
            allAnswerRadio.forEach(answerRadio => {
                if(answerRadio.getAttribute("value") === userResponseJSON[index].checkedOption) {
                    answerRadio.checked = true;
                };
            });
        });
        divEl.append(radioInputElement);
        divEl.append(radioLabel);

        fragment.append(divEl);
    }
    
    document.getElementById(idRef).append(fragment);
}

/**
 * Generate available options based on questionIndex.
 * @param {Number} questionIndex An integer starting from 0.
 */
function generateOptions(questionIndex){
    let fragment = new DocumentFragment();
    let idRef = "answer-area";
    let iterationLimit = Object.keys(itemObject[questionIndex].options).length;
    let radioGroupName = "answerGroup";
    let radioIdentity = "opt-";

    for (let index = 0; index < iterationLimit; index++) {
        let correctedIndex = index+1;
        let radioInputElement = document.createElement("input");
        let radioLabel = document.createElement("label");

        radioInputElement.setAttribute("type", "radio");
        radioInputElement.setAttribute("name", radioGroupName);
        radioInputElement.setAttribute("id", radioIdentity+correctedIndex);
        radioInputElement.setAttribute("value", index);
        radioLabel.setAttribute("for", radioIdentity+correctedIndex);
        radioLabel.setAttribute("id", "optLabel-"+radioIdentity+correctedIndex);
        radioLabel.textContent = itemObject[questionIndex].options[index].option;

        let divEl = document.createElement("div");
        radioInputElement.addEventListener("change", () => {
            let allAnswerRadio = document.getElementsByName(radioGroupName);
            allAnswerRadio.forEach(answerRadio => {
                if(answerRadio.checked){
                    userResponseJSON[questionIndex].checkedOption = answerRadio.getAttribute("value");
                    userResponseJSON[questionIndex].optionText = document.getElementById("optLabel-"+answerRadio.id).textContent;
                }
            });
        })
        divEl.append(radioInputElement);
        divEl.append(radioLabel);

        fragment.append(divEl);
    }

    document.getElementById(idRef).innerHTML = "";
    document.getElementById(idRef).append(fragment);
}

/**
 * Send user response to result.php.
 */
function sendUserResponse(){
    let targetPHP = "result.php";
    let responseData = JSON.stringify(userResponseJSON);
    fetch(targetPHP, {
        method: "POST",
        headers: {"Content-Type": "application/json"},
        body: responseData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.json()
    })
    .then(data => console.log(data))
    .catch(error => console.log(error));
}

/**
 * Generate a countdown timer and displayed the remaining seconds to timerText.
 * @param {Number} seconds The number of seconds, starting from 0.
 * @param {Element} timerElement A html element for displaying timer.
 */
function timer(seconds, timerElement) {
    let counter = seconds;
    timerElement.textContent = counter;
    const interval = setInterval(() => {
        counter--;
        timerElement.textContent = counter;

        if(counter === 0){
            clearInterval(interval);
        }
    },1000);
}