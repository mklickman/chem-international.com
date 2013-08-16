$(document).ready(function() {

  $('.mobile-nav').change(function() {
    if ($(this).val() == "/") {
      window.location = 'index.php';
    } else {
      window.location = 'interior.php';
    }
    
  });
});