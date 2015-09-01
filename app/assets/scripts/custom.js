// Dynamic Ajax loading of pages
$(function () {
  function menuActive() { // Function to toggle active menu links
      $('.active').removeClass('active'); // Remove "active" class on menu links after an ajax call
      var pgurl = window.location.href; // Get the page url
// var pguri = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
// "uri" gets only the link folder while "url" gets the entire link
// Left here in case anyone out there uses $p->uri() on the menu
      $(".menu a").each(function () {
          if ($(this).attr("href") == pgurl || $(this).attr("href") == '') { // Compare url to links
              $(this).addClass("active"); // Set "active" class on menu links
              $(this).parents('li').children('a').addClass('active'); // Set "active" class on the parent of submenu links
          }
      });
  };
    // Requires jQuery 1.7+ to utilize the new "on" event attachment
    $("body").on("click", "a.pjax", function (event) {
      var target = $(this).attr("href");

      $('#pjax-container, footer').fadeOut('normal', function() {
        $.pjax({
            url: target,
            fragment: "#pjax-container",
            container: "#pjax-container"
        });
      });
        event.preventDefault();
    });
    $(document).on('pjax:start', function () {
        NProgress.start(); // Start the nprogress bar
    });
    $(document).on('pjax:end', function () {
        NProgress.done(); // End the nprogress bar
        menuActive(); // Update the "active" class on links after ajax call
    });
    $(document).on('pjax:success', function() {
        $('#pjax-container, footer').fadeIn('normal');
    });
    $(document).ready(menuActive); // Update the "active" class on links on first load
});

// Dynamic Hover States
$('.project__link').hover( function() {
  var $hover = $(this).attr('data-hover');
  $('body').css({"background-image":"url("+$hover+")" });  // minor change
}).mouseleave(function(){
  $('body').css("background-image", "none");
});
$('.project__link').click( function() {
    $('body').css("background-image", "none");
});
