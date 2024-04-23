let itemObject = null;
/**
 * Initialize an object from the server as json object.
 * @param {Object} serverObject an object from server.
 */
function initItemObject(serverObject){
    itemObject = serverObject;
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
 * Modifiy a specific html element's text with another text.
 * @param {String} elementId The id of html element.
 * @param {String} text The text for the elementId.
 */
function setElementText(elementId, text){
    let elementText = document.getElementById(elementId);
    elementText.textContent = text;
}

/**
 * Get an option from item's options based on optionIndex and questionIndex.
 * @param {Number} questionIndex An integer starting from 0.
 * @param {Number} optionIndex An integer starting from 0.
 * @returns Item's option in string format.
 */
function getItemOptions(questionIndex, optionIndex){
    let itemOptionObject = itemObject[questionIndex].options;
    let itemOption = itemOptionObject[optionIndex].option;
    return itemOption;
}

function generateQuestionIndex() {
    let fragment = new DocumentFragment();
    let idRef = "question-idx";
    let iterationLimit = Object.keys(itemObject).length;
    let radioGroupName = "questionIndexGroup";
    let radioIdentity = "q-";

    for (let index = 0; index < iterationLimit; index++) {
        let correctedIndex = index+1;
        let radioInputElement = document.createElement("input");
        let radioLabel = document.createElement("label");

        radioInputElement.setAttribute("type", "radio");
        radioInputElement.setAttribute("name", radioGroupName);
        radioInputElement.setAttribute("id", radioIdentity+correctedIndex);
        radioLabel.setAttribute("for", radioGroupName);
        radioLabel.textContent = correctedIndex;

        let divEl = document.createElement("div");
        divEl.append(radioInputElement);
        divEl.append(radioLabel);

        fragment.append(divEl);
    }
    
    document.getElementById(idRef).append(fragment);
}