var intervalId = -1;

$(document).ready(function() {
    initInterval();

    
    $('<iframe width="497" height="280" class="col-xs-12 col-md-6" style="float: right; padding-left: 15px" src="https://www.youtube.com/embed/JiRKbmxApi4?rel=0&controls=1&showinfo=0" frameborder="0" allowfullscreen></iframe>').insertAfter("#main-title");

    // Add smooth scrolling to all links
    $("body").on('click', "a", function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
});

function initInterval() {
    if (intervalId !== -1) {
        clearInterval(intervalId);
        intervalId = -1;
    }

    intervalId = setInterval(function() {
        if ($(".slider-controls .highlighted").next("li").length === 0) {
            $(".slider-controls li:nth-child(1)").click();
        } else {
            $(".slider-controls .highlighted").next("li").click();
        }

    }, 8000);
}