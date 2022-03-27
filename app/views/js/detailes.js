// Get the modal
var modali = document.getElementById("myModali");
    
// Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = $(".myImg");
var modalImgi = document.getElementById("img9");
var captionText = document.getElementById("caption");
function img(event)  {    
    modali.style.display = "block";
    modalImgi.src = event.target.src;
    captionText.innerHTML = event.target.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modali.style.display = "none";
}