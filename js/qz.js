let itemObject = new Object();
let userResponseJSON = new Object();
/**
 * Initialize a json object from the server as object.
 * @param {Object} serverObject an object from server.
 */
function initItemObject(serverObject){
    for (let index = 0; index < Object.keys(serverObject).length; index++) {
        itemObject[index] = {
            question: serverObject[index].question,
            options: new Object()
        }
        for (let optionIndex = 0; optionIndex < Object.keys(serverObject[index].options).length; optionIndex++) {
            itemObject[index].options[optionIndex] = serverObject[index].options[optionIndex].option;
        }
    }
    console.log(itemObject);
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
    let formElement = document.createElement("form");
    formElement.setAttribute("method", "post");
    formElement.setAttribute("action", "quiz.php");

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
        radioLabel.textContent = itemObject[questionIndex].options[index];

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

        formElement.append(divEl);
        fragment.append(formElement);
    }

    document.getElementById(idRef).innerHTML = "";
    document.getElementById(idRef).append(fragment);
}