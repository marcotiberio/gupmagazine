jQuery( document ).ready(function($) {
  alert ('test');
});

$(document).ready(function(){
  $("#open_menuOverlay").click(function(){
    $("#menuOverlay").slideToggle();
  });
});



// function openMenuoverlay() {
//    var x = document.getElementById("menuOverlay");
//    if (x.style.display === "none") {
//      x.style.display = "grid";
//    } else {
//      x.style.display = "none";
//    }
//  }