console.log("alo");

const imagesAll = document.querySelectorAll(".img img");
const imdageId1 = document.querySelectorAll('.img img[data-id="1"]');
const imdageId2 = document.querySelectorAll('.img img[data-id="2"]');
const imdageId3 = document.querySelectorAll('.img img[data-id="3"]');
const imdageId4 = document.querySelectorAll('.img img[data-id="4"]');
const imdageId5 = document.querySelectorAll('.img img[data-id="5"]');
imdageId1.forEach((image) => {
    image.classList.add("image1");
});
imdageId2.forEach((image) => {
    image.classList.add("image2");
});
imdageId3.forEach((image) => {
    image.classList.add("image3");
});
imdageId4.forEach((image) => {
    image.classList.add("image4");
});
imdageId5.forEach((image) => {
    image.classList.add("image5");
});
//Jquery
/* $(function () {
    btn.forEach(function (event) {
        event.preventDefault();
    });
}); */

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher("4c60d730ac325cd04487", {
  cluster: "us2",
});

var channel = pusher.subscribe("like-channel");
channel.bind("App\\Events\\LikeEvent", function (data) {
  const likesCount = data.message;
  $('.likes-count').text(likesCount);
});
$(document).ready(function() {
    $('#like-form').on('submit', function(event) {
      event.preventDefault();
      
      var form = $(this);
      var url = form.attr('action');
      var formData = form.serialize();
      
      $.ajax({
        type: 'POST',
        url: url,
        data: formData,
        success: function(response) {
          // Actualiza el contador de likes con los datos recibidos en la respuesta
          var likesCount = response.message;
          $('.likes-count').text(likesCount);
        },
        error: function(error) {
          console.log(error);
        }
      });
    });
  });
