var menuToggle = document.querySelector("#menu-toggle");
var activeElements = document.querySelectorAll(".active-element");
var toggledMenu = menuToggle.addEventListener("click", function(){

     for(var activated = 0; activated < activeElements.length; activated++){
          activeElements[activated].classList.toggle("active");
     }
});



function dbInquiry(id){
         document.getElementById("inquiry").style.display = "";
         document.getElementById("database-email").style.display = "none";
}
function dbEmail(id){
     document.getElementById("inquiry").style.display = "none";
     document.getElementById("database-email").style.display = "";
}

function draft(id){
     document.getElementById("blog-draft").style.display = "";
     document.getElementById("blog-publish").style.display = "none";
}
function publish(id){
     document.getElementById("blog-draft").style.display = "none";
     document.getElementById("blog-publish").style.display = "";
}

