// submit button
var Submit = document.getElementById("Submit")
var PHPSubmit = document.getElementById("PHPSubmit")

// checkbox
var checkOne = document.getElementById("checkOne")
var checkTwo = document.getElementById("checkTwo")
var checkThree = document.getElementById("checkThree")

// field of step
var stepOne = document.getElementById("stepOne")
var stepTwo = document.getElementById("stepTwo")
var stepThree = document.getElementById("stepThree")

//name of the
var question = document.getElementById("question")


//message
var message = document.getElementById("message")
var containerMessage = document.getElementById("containerMessage")


Submit.addEventListener("click", function () {
    nextStep()
})

document.addEventListener("keydown", function (event) {
    const nomTouche = event.key;
    if (nomTouche === 'Enter') {
        nextStep()
    }
})

var step = 0;

function nextStep(){
    if(step == 0){
        if(checkOne.checked == true || checkTwo.checked == true || checkThree.checked == true) {
            checkOne.style.marginTop = "200px"
            checkOne.style.opacity = "0"

            setTimeout(function () {
                checkTwo.style.marginTop = "200px"
                checkTwo.style.opacity = "0"
            }, 150)

            setTimeout(function () {
                checkThree.style.marginTop = "200px"
                checkThree.style.opacity = "0"
            }, 300)

            setTimeout(function () {
                checkOne.style.display = "none"
                checkTwo.style.display = "none"
                checkThree.style.display = "none"
                stepOne.style.display= "none"

                setTimeout(function () {
                    stepTwo.style.display = "block"
                    setTimeout(function () {
                        question.innerHTML = "Tell me more"
                        stepTwo.style.opacity = "1"
                        stepTwo.style.marginTop = "0px"
                        step = 1;
                    }, 100)
                }, 100)
            }, 500)
        }else {
            Message("You need to choose")
        }
    }
    else if(step == 1){
        endStep()
    }
}

function endStep(){
    if(stepTwo.value == ""){
        Message("You must tell me more")
    }
    else{
        stepTwo.style.marginTop = "100px"
        stepTwo.style.opacity = "0"
        setTimeout(function () {
            stepTwo.style.display = "none"
            stepThree.style.display = "block"
            setTimeout(function () {
                question.innerHTML = "Can I text you back ?"
                stepThree.style.opacity = "1"
                stepThree.style.marginTop = "105px"
                Submit.style.display = "none"
                PHPSubmit.style.display = "block"

            }, 100)
        }, 500)
    }
}


function Message(messageText) {
    message.innerHTML = messageText
    containerMessage.style.top = "40px"
    setTimeout(function () {
        containerMessage.style.top = "-150px"
    }, 3500)
}