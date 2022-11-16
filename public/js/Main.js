function dropdownMenu(){
    var x = document.getElementById("dropdownClick");
    if(x.className === "topnav"){
        x.className += " responsive"
    }else{
        x.className= "topnav"
    }
}

function reveal() {
    var reveals = document.querySelectorAll(".reveal-nav")
    var startelement = document.querySelectorAll(".nametag")
    
    for (var i = 0; i < reveals.length; i++) {

        var windowHeight = window.innerHeight;
        var elementTop = startelement[i].getBoundingClientRect().bottom;
        var elementVisible = 600;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }
    
window.addEventListener("scroll", reveal);

function revealom() {
  var reveals = document.querySelectorAll(".om-mig");
  var startelement = document.querySelectorAll(".om-mig-title");
  
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = startelement[i].getBoundingClientRect().top;
    var elementVisible = 50;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", revealom);

function showevent() {
  var reveals = document.querySelectorAll(".nametag");
  for (var i = 0; i < reveals.length; i++) {
    reveals[i].classList.add("active");
  }
}

