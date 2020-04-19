//Instead of using <strong>, use DOM to change text to bold, and <strong><em> to bold italic
document.getElementById("boldtxt").style.fontWeight = "bold";
document.getElementById("bold_em").style.fontStyle = "oblique";

// Get the modal
//var modal = document.getElementById("myModal");

function modalButton() {
  document.getElementById("myModal").style.display= "block";
}

function closeButton() {
  document.getElementById("myModal").style.display= "none";
}

/*var frmvalidator  = new Validator("enlistmentform");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email","Please enter a valid email address");*/

/*Get the button that opens the modal
var btn = document.getElementById("modalBtn");*/

/* Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];*/

/* When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}*/

/* When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}*/
