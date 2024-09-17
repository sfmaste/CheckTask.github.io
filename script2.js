var myButton = document.getElementById("button");
var myWindow = document.getElementById("muWindow")

myButton.addEventListener("click", function(){
    myWindow.style.display = "block";
});

var closebtn = document.getElementById("closeButton");
closeButton.addEventListener("click", function() {
    myWindow.style.display = "none";
});