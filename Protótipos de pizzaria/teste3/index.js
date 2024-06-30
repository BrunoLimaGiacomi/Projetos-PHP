/*
fetch('aqui.php', {
  method: 'POST',
  //type: "POST",
  data: {num: num},
  success: function(response)
  {
    $("amem").text(response);
  },
  error: function(xhr, status, error) 
  {
    console.log(error);
  }
})
.then(function(response) {
  return response.text();
})
.then(function(data) {
  console.log(data); // Output the response from PHP
})
.catch(function(error) {
  console.log(error);
});*/
var num = 42;

$.ajax({
    url: "aqui.php",
    type: "POST",
    data: {cal: num },
    success: function(response) 
    {
      $("#resultt").text(response);
    },
    error: function(xhr, status, error) 
    {
      console.log(error);
    }
  });
  