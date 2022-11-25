const unHideButton = document.querySelector(".more-information__hide");
const toggleSvg = document.querySelector(".material-symbols-outlined")
const infoDiv = document.querySelector(".more-information__wrap")

function toggleButton() {
    if (toggleSvg.textContent === "remove") {
        toggleSvg.textContent =  "add" 
    } else {
        toggleSvg.textContent = "remove"
    }
    unHideButton.classList.toggle("more-information__show");
}

infoDiv.addEventListener("click", toggleButton)