$('#search').click(function(e) {
  e.preventDefault();
  $('.search').css("display","block");
  $('.search').velocity({
    opacity: 1,
  }, {
    duration: 1000,
    easing: "ease-in-out",
    complete: function() {

    }
  });
});
