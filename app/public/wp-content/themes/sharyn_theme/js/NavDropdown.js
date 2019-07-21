$j = jQuery.noConflict();

$j(document).ready(function() {
  const hamIcon = $j('.hamburger-icon');
  const navMenu = $j('.nav-menu');
  hamIcon.on('click', function() {
    if (hamIcon.hasClass('open')) {
      hamIcon.removeClass('open');
      navMenu.removeClass('reveal');
    } else {
      hamIcon.addClass('open');
      navMenu.addClass('reveal');
    }
  });
});
