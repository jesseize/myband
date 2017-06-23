$(document).ready(function() {
  $.ajax({
      url: "http://www.martingarrix.com/pkg/lt3-api/4.0/api/instagram/users/media/recent?username=martingarrix&max_id=&fields=caption%2Ccreated_time%2Cid%2Cimages%2Clink&limit=24",
      type: "GET",
      dataType: "json",
      complete: function (data) {
          jQuery.each(JSON.parse(data.responseText), function(i, obj) {
            setTimeout(function() {
              url = obj.images.standard_resolution.url;
              $('.instagram').append('<img class="wow fadeIn" src="'+url+'">');
            },250);
          });
      }
  });



});
