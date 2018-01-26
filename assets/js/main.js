$(document).ready(function() {
  function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }

  $("#introcarousel").carousel();
  
  /*$("#mailinput").onkeyup(function() {
    var mailinput = $("#mailinput").val();
    if(
      (isEmail(mailinput) )
    )
    {
      $("#mailinput").attr("disabled",false);
    }
    else {
      $("#mailinput").attr("disabled",true);
    }*/
  })
});