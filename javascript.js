console.log("javascript is running, get after it")

function burgermenu() {
    var x = document.getElementById("menu");
    if (x.style.left === "-100%") {
        x.style.left = "0";
    } else {
        x.style.left = "-100%";
    }
}