jQuery( document ).ready(function($) {
  alert ('test');
});



function openMenuoverlay() {
   var x = document.getElementById("menuOverlay");
   if (x.style.display === "none") {
     x.style.display = "grid";
   } else {
     x.style.display = "none";
   }
 }