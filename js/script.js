var $nav = jQuery(".cat_nav_inner");
var $btn = jQuery(".cat_nav_inner button");
var $vlinks = jQuery(".cat_nav_inner .cat_nav_visible-links");
var $hlinks = jQuery(".cat_nav_inner .cat_nav_hidden-links");

var breaks = [];

function updateNav() {
  var availableSpace = $btn.hasClass("hidden")
    ? $nav.width()
    : $nav.width() - $btn.width() - 50;

    console.log("Content Width: "+$vlinks.width());
    console.log("Available Space: "+availableSpace);
    console.log('');

  // The visible list is overflowing the nav
  if ($vlinks.width() > availableSpace) {
    // Record the width of the list
    breaks.push($vlinks.width());

    // Move item to the hidden list
    $vlinks
      .children()
      .last()
      .prependTo($hlinks);

    // Show the dropdown btn
    if ($btn.hasClass("hidden")) {
      $btn.removeClass("hidden");
    }

    // The visible list is not overflowing
  } else {
    // There is space for another item in the nav
    if (availableSpace > breaks[breaks.length - 1]) {
      // Move the item to the visible list
      $hlinks
        .children()
        .first()
        .appendTo($vlinks);
      breaks.pop();
    }

    // Hide the dropdown btn if hidden list is empty
    if (breaks.length < 1) {
      $btn.addClass("hidden");
      $hlinks.addClass("hidden");
    }
  }

  // Keep counter updated
  $btn.attr("count", breaks.length);

  // Recur if the visible list is still overflowing the nav
  if ($vlinks.width() > availableSpace) {
    updateNav();
  }
}

// Window listeners
jQuery(window).resize(function() {
    updateNav();
  });

$btn.on("click", function() {
  $hlinks.toggleClass("hidden");
});

jQuery("document").ready(function(){
    updateNav();
});

