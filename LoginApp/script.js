const SignInBTN = document.getElementById("SignInbtn");
const SignUpBTN = document.getElementById("SignUpbtn");

const SignIndiv = document.getElementById("SignIn");
const SignUpdiv = document.getElementById("SignUp");

SignInBTN.addEventListener("click" , function(){

    SignUpdiv.style.display = "none";
    SignIndiv.style.display = "block";

});

SignUpBTN.addEventListener("click" , function(){

    SignIndiv.style.display = "none";
    SignUpdiv.style.display = "block";

});