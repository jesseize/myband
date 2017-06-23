$(document).ready(function() {
    $(".loader-overlay").velocity({
      opacity: 0,
    }, {
      duration: 1000,
      easing: "ease-in-out",
      complete: function() {
        $(".loader-overlay").css("display","none");
      }
  });
});
