$(document).ready(function() { 
  $('#myCarousel').carousel({ 
  	interval: 6000, 
  	cycle: true, 
  	pause: "false"
  });
}); 

$(function() {

  // Do our DOM lookups beforehand
  var nav_container = $(".container");
  var nav = $("#one-page");

  nav_container.waypoint({
    handler: function() {
        nav.toggleClass('stuck');
    }
  });
});

