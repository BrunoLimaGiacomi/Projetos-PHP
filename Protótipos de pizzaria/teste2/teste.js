//<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

var result = 5 + 5;
$(document).ready(function() {
  $.ajax({
    url: "calculation.php",
    type: "POST",
    data: { calculation: result },
    success: function(response) {
      $("#resultt").text(response);
    },
    error: function(xhr, status, error) {
      console.log(error);
    }
  });
});
