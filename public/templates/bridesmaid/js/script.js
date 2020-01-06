var colorText = '#8a7373';
var colorHighlight = 'rgb(120, 96, 78)';

function changeActiveMenu(menu) {
    // console.log(menu);
    (menu);
    if (menu === "home") {
        $('#home-button').css('background-color', colorHighlight); //active
        $('#bride-button').css('background-color', 'transparent');
        $('#event-button').css('background-color', 'transparent');
        $('#location-button').css('background-color', 'transparent');
        $('#menu-button').css('background-color', 'transparent');

        $('.title-icon-home').css('color', 'white');
        $('.title-icon-bride').css('color', colorText);
        $('.title-icon-event').css('color', colorText);
        $('.title-icon-location').css('color', colorText);
        $('.title-icon-menu').css('color', colorText);

    } else if (menu === "bride") {
        $('#home-button').css('background-color', 'transparent');
        $('#bride-button').css('background-color', colorHighlight); //active
        $('#event-button').css('background-color', 'transparent');
        $('#location-button').css('background-color', 'transparent');
        $('#menu-button').css('background-color', 'transparent');

        $('.title-icon-home').css('color', colorText);
        $('.title-icon-bride').css('color', 'white');
        $('.title-icon-event').css('color', colorText);
        $('.title-icon-location').css('color', colorText);
        $('.title-icon-menu').css('color', colorText);


    } else if (menu === 'event') {
        $('#home-button').css('background-color', 'transparent');
        $('#bride-button').css('background-color', 'transparent');
        $('#event-button').css('background-color', colorHighlight); //active
        $('#location-button').css('background-color', 'transparent');
        $('#menu-button').css('background-color', 'transparent');

        $('.title-icon-home').css('color', colorText);
        $('.title-icon-bride').css('color', colorText);
        $('.title-icon-event').css('color', 'white');
        $('.title-icon-location').css('color', colorText);
        $('.title-icon-menu').css('color', colorText);
    } else if (menu === 'location') {
        $('#home-button').css('background-color', 'transparent');
        $('#bride-button').css('background-color', 'transparent');
        $('#event-button').css('background-color', 'transparent');
        $('#location-button').css('background-color', colorHighlight); //active
        $('#menu-button').css('background-color', 'transparent');

        $('.title-icon-home').css('color', colorText);
        $('.title-icon-bride').css('color', colorText);
        $('.title-icon-event').css('color', colorText);
        $('.title-icon-location').css('color', 'white');
        $('.title-icon-menu').css('color', colorText);

    } else if (menu === 'comment') {
        $('#home-button').css('background-color', 'transparent');
        $('#bride-button').css('background-color', 'transparent');
        $('#event-button').css('background-color', 'transparent');
        $('#location-button').css('background-color', 'transparent');
        $('#menu-button').css('background-color', colorHighlight); //active

        $('.title-icon-home').css('color', colorText);
        $('.title-icon-bride').css('color', colorText);
        $('.title-icon-event').css('color', colorText);
        $('.title-icon-location').css('color', colorText);
        $('.title-icon-menu').css('color', 'white');
    } else if (menu === 'gallery') {
        $('#home-button').css('background-color', 'transparent');
        $('#bride-button').css('background-color', 'transparent');
        $('#event-button').css('background-color', 'transparent');
        $('#location-button').css('background-color', 'transparent');
        $('#menu-button').css('background-color', colorHighlight); //active

        $('.title-icon-home').css('color', colorText);
        $('.title-icon-bride').css('color', colorText);
        $('.title-icon-event').css('color', colorText);
        $('.title-icon-location').css('color', colorText);
        $('.title-icon-menu').css('color', 'white');
    } else if (menu === 'quote') {
        $('#home-button').css('background-color', 'transparent');
        $('#bride-button').css('background-color', 'transparent');
        $('#event-button').css('background-color', 'transparent');
        $('#location-button').css('background-color', 'transparent');
        $('#menu-button').css('background-color', colorHighlight); //active

        $('.title-icon-home').css('color', colorText);
        $('.title-icon-bride').css('color', colorText);
        $('.title-icon-event').css('color', colorText);
        $('.title-icon-location').css('color', colorText);
        $('.title-icon-menu').css('color', 'white');
    }
}



// Get the modal
var modal = document.getElementById("menu");

// Get the button that opens the modal
var btn = document.getElementById("menu-button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}





// // ========= GALLERY PREVIEWER =========

// // Gallery Preview POPUP
// $("#image-item").click(function() {

//     console.log('GALLERY ITEM CLICKED');
// });



// // Get the modal
// var galleryModal = document.getElementById("previewer");

// // Get the button that opens the modal
// var imageBtn = document.getElementById("image-item");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal 
// btn.onclick = function() {
//     galleryModal.style.display = "block";
// }

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() {
//     galleryModal.style.display = "none";
// }

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == galleryModal) {
//         galleryModal.style.display = "none";
//     }
// }











// // TESTED BOOTSTRAP MODAL
// // GALLERY PHOTO ITEM
// $(".image-item").click(function() {

//     // GET PHOTO URL FROM DIV ITEM
//     // var picker = $(this).attr("data-url");
//     var picker = $(this).data("url");

//     // THROW TO MODAL, DIV CLASS IMAGE PREVIEW
//     // alert(picker);
//     $(".imagePreview").css('background-image', 'url(' + picker + ')');
// });


// $('#close-modal').click(function() {
//     $('#menuModal').modal('hide');
// });