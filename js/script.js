/* Compatibility Mode */
jQuery('#closeModal').on('click', function() {
   jQuery("#modal").hide();
})

function openMenuoverlay() {
   var x = document.getElementById("menuOverlay");
   if (x.style.display === "none") {
     x.style.display = "block";
   } else {
     x.style.display = "none";
   }
 }