var line = document.getElementById("line")
var contentSummary = document.querySelectorAll(".summarySection")
var summary = document.getElementById("contentSummary")

line.style.marginLeft = contentSummary[0].offsetLeft + "px"
line.style.width = contentSummary[0].offsetWidth + "px"


for(let i = 0; i < contentSummary.length; i++){
    contentSummary[i].addEventListener("mouseenter", function(){
        if(i == 0){
            line.style.marginLeft = contentSummary[i].offsetLeft + "px"
            line.style.width = contentSummary[i].offsetWidth + "px"
        }
        else{
            line.style.marginLeft = contentSummary[i].offsetLeft + "px"
            line.style.width = contentSummary[i].offsetWidth + "px"
        }
    })

    summary.addEventListener("mouseleave", function () {
        line.style.marginLeft = contentSummary[0].offsetLeft + "px"
        line.style.width = contentSummary[0].offsetWidth + "px"
    })
}
