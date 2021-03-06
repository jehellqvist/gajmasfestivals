$(document).ready(function() { 
  $('#myCarousel').carousel({ 
  	interval: 6000, /*6000*/
  	cycle: true, 
  	pause: "false"
  });

    $("#clear-btn").on("click", function() {
        localStorage.clear();

    }); 
});


//changes open and close icon in filter menu button.
$(function() {
    $(".open-nav").on('click', function() {
        if ($(".open-nav i").hasClass("fa-angle-down")) {
            $(".open-nav i").removeClass("fa-angle-down").addClass("fa-angle-up");
        }
        else {
            $(".open-nav i").removeClass("fa-angle-up").addClass("fa-angle-down");
        }
    }); 
});


$(function() {
    var trigger = 0;
    $(".filter-handlers input:checkbox").each(function() {
        if(localStorage.getItem($(this).attr("data-catid")) == "true") {
            $(this).attr("checked", true);
            $(this).change();
            trigger = 1;
        };
    });

    if(trigger == 0) {
        $("#clear").attr("checked", true);
        $("#clear-btn").addClass("active");
    }
 });

$(function() {

  // Do our DOM lookups beforehand
  var nav_container = $(".nav-container");
  var nav = $("#one-page");
  var nav_ul = $("#one-page-nav");
  var logo = $(".site-title");
  var nav_logo = $(".nav-logo");
  var nav_button = $(".navbar-toggle")

  nav_container.waypoint({
    handler: function() {
        nav.toggleClass('stuck'),
        nav_ul.toggleClass('margin'),
        logo.toggleClass('opacity'),
        nav_logo.toggleClass('show'),
        nav_button.toggleClass('smaller')
    },
    offset: -60
  });
});


$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});


$(function() {
    var all_active_posts = $(".active-post");

        all_active_posts.each(function(index, value) { 
            if(index <= 11) { 
                $(this).addClass("show-post");
                $(this).removeClass("active-post");
            }
         });
        if (! $("article").hasClass("active-post")) {
            $(".load-more").prop("disabled",true);
        }
        else if($("article").hasClass("active-post")) {
            $(".load-more").removeAttr('disabled');
        }
                
        $(".load-more").on('click', load_more);
        $(".filter-wrapper .btn").on('click', reload_posts);

        function load_more() {
            //onclick load more content
            var all_active_posts = $(".active-post");

            
            all_active_posts.each(function(index, value) { 
                if(index <= 3) { 
                    $(this).addClass("show-post");
                    $(this).removeClass("active-post");
                }
            });

            if (! $("article").hasClass("active-post")) {
                $(".load-more").prop("disabled",true);
            }
            else if($("article").hasClass("active-post")) {
                $(".load-more").removeAttr('disabled');
            }
        };

        function reload_posts() {
            //onload load standard content
            $(".post-content").removeClass("show-post");

            var all_active_posts = $(".active-post");
            
            all_active_posts.each(function(index, value) { 
                if(index <= 11) { 
                    $(this).addClass("show-post");
                    $(this).removeClass("active-post");
                }
            });

             if (! $("article").hasClass("active-post")) {
                $(".load-more").prop("disabled",true);
            }
            else if($("article").hasClass("active-post")) {
                $(".load-more").removeAttr('disabled');
            }
        };
});
