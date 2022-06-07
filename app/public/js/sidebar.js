document.getElementsByClassName("openbtn")[0].addEventListener("click", function() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("mySidebar").style.zIndex = 3;
    document.querySelector("body").style.overflowY = "hidden";
    document.getElementsByClassName("openbtn")[0].style.opacity = "0";
    document.getElementById("menu").style.opacity = "0.8";
    document.getElementById("movie").style.opacity = "0.8";
});

document.getElementsByClassName("closebtn")[0].addEventListener("click", function() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("mySidebar").style.zIndex = 1;
    document.getElementsByClassName("openbtn")[0].style.opacity = "1";
    document.getElementById("menu").style.opacity = "1";
    document.getElementById("movie").style.opacity = "1";
    document.querySelector("body").style.overflowY = "visible";
});