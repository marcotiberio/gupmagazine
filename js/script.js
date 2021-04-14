$(document).ready(function(){
  $(".show-search").click(function(){
    $("#hiddenSearch").slideToggle("fast");
  });
});

$(document).ready(function(){
  $("#open_menuOverlay").click(function(){
    $("#menuOverlay").slideToggle("fast");
  });
});

$(document).ready(function(){
  $("#menu-toggleMobile").click(function(){
    $("#menuOverlay").slideToggle("fast");
  });
});