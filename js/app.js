//Problem: user when clicking on image goes to a dead end
//Solution: Create an overlay with the large image - lightbox

var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $caption = $("<p></p>");

// An image to overlay
$overlay.append($image);

// A caption to overlay
$overlay.append($caption);

// Add overlay
$("body").append($overlay);
    
// capture the click event on a link to an image
$(".imageGallery a").click(function(event){
    event.preventDefault();
    var imageLocation = $(this).attr("href");
    // update overlay with the image linked to the link
    $image.attr("src", imageLocation);
    
    // Show the overlay
    $overlay.show();
    
    // get child's alt attribute and set caption
    var captionText = $(this).children("img").attr("alt");
    $caption.text(captionText);
});


// when overlay is clicked
$overlay.click(function(){
     // hide the overlay
     $overlay.hide();
});


   
    