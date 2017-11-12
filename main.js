$(function () {
  $("#result").click(function () {
      $.ajax({
          url:"Qoution.php",
          success:
          function  () {
          $("div #result1").html();
          }
      })
  })
});
