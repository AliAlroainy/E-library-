// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal || event.target == modal2) {
        modal.style.display = "none";
        modal2.style.display = "none";
    }
}

// menu bar -------------------------------
function myFunction() {
    var y = document.getElementById("search");
    var x = document.getElementById("nav");

    if (x.className === "nv") {
      x.className += " nv1";
      y.style.width = "30vw";
      y.style.border = "#333 1px solid"

    } else {
      x.className = "nv";
      y.style.width = "60vw"
      y.style.border = "none"
    }
  }

// ------------------------------------

function checkCart(){

  var c = document.getElementById('counter-cart');
  c.style.visibility ='visible';
  var x =  parseInt(c.innerText);
  x++;
  c.innerText = x;
}

// ------------------------------------
function changeLanguage(){
  //document.getElementsByClassName("body")[0];
  var bod =  document.getElementsByTagName("body")[0];
 if (bod.classList.contains("body")){
   bod.classList.replace("body","body1");
   document.getElementsByClassName('nv')[0].style.direction = "ltr";
  // document.getElementById('search').style.direction = "ltr";
    document.getElementById('second-header').style.flexDirection = "row-reverse";
    
  // document.getElementsByClassName('nre')[0].style.direction = "ltr";
  document.getElementsByTagName('ol')[0].style.flexDirection = "row-reverse";
  // document.querySelectorAll('mainOffer-container').style.flexDirection = "row-reverse";
  //  document.querySelectorAll('latst-offer').style.direction = style.flexDirection = "row-reverse";

 }else if (bod.classList.contains("body1")){
    bod.classList.replace("body1","body");
    document.getElementsByClassName('nv')[0].style.direction = "rtl";
    document.getElementsByClassName('search')[0].style.direction = "rtl";
    document.getElementById('second-header').style.flexDirection = "row";


  //  document.getElementsByClassName('nre')[0].style.direction = "rtl";
   // document.getElementsByTagName('ol')[0].style.direction = "rtl";
    //document.querySelectorAll('mainOffer-container').style.direction = "rtl";
   // document.querySelectorAll('latst-offer').style.direction = "rtl";



  } 
  
 

}