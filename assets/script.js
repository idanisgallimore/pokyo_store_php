// Form validation 
var password = document.querySelector(".password").value;

function formValid(){
    var userid = document.querySelector(".userid").value;
    var password = document.querySelector(".password").value;
    var inputtxt = document.querySelector(".validation-txt");
   if(userid == ""){
       inputtxt.style.display = "inline";
   }
}