//banner-fit
window.addEventListener("scroll",function(){
    var banner = document.getElementById("top-banner");
    banner.classList.toggle("n-height", window.scrollY > 0);
});

//mobile nav
/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

//sctoll btn
const goTopBtn = document.querySelector('.scrollTop');

window.addEventListener('scroll', checkHeight)

function checkHeight(){
    if(window.scrollY > 200){
        goTopBtn.style.display = "flex"
    } else {
        goTopBtn.style.display = "none"
    }
}

goTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    })
});

//header sticky
window.addEventListener("scroll",function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
})

//scroll adding class-name
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
      const toggleCondition = $(this).scrollTop() > 10;
      $(".sticky-name").toggleClass('padding-top-80', toggleCondition);
});


//magnific-popup
// $(document).ready(function() {
//     $('.youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
//         disableOn: 700,
//         type: 'iframe',
//         mainClass: 'mfp-fade',
//         removalDelay: 160,
//         preloader: false,

//         fixedContentPos: false
//     });
// });


$(document).ready(function(){

$("#tab-list-container li a").click(function(e){
   e.preventDefault();
    let link =  $(this).attr("href");
    $(link).addClass("activeContent").siblings().removeClass('activeContent');
    //$("activeContent").addClass("activeContent");
    
    
    
    $(link).css("display", "block");
    $(this).addClass("active-tab");
    $(this).parents().siblings().find("a").removeClass("active-tab");
    
    
    
    
})



});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
//When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
  }
  
  //When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }


// Get the modal
var modal = document.getElementById("dialog-box");

// Get the button that opens the modal
var btn1 = document.getElementById("open-dialog-box-btn1");
var btn2 = document.getElementById("open-dialog-box-btn2");
var btn3 = document.getElementById("open-dialog-box-btn3");
var btn4 = document.getElementById("open-dialog-box-btn4");
var btn5 = document.getElementById("open-dialog-box-btn5");
var btn6 = document.getElementById("open-dialog-box-btn6");
var btn7 = document.getElementById("open-dialog-box-btn7");
var btn8 = document.getElementById("open-dialog-box-btn8");
var btn9 = document.getElementById("open-dialog-box-btn9");
var btn10 = document.getElementById("open-dialog-box-btn10");
var btn11 = document.getElementById("open-dialog-box-btn11");
var btn12 = document.getElementById("open-dialog-box-btn12");
var btn13 = document.getElementById("open-dialog-box-btn13");
var btn14 = document.getElementById("open-dialog-box-btn14");
var btn15 = document.getElementById("open-dialog-box-btn15");
var btn16 = document.getElementById("open-dialog-box-btn16");
var btn17 = document.getElementById("open-dialog-box-btn17");
var btn18 = document.getElementById("open-dialog-box-btn18");
var btn19 = document.getElementById("open-dialog-box-btn19");
var btn20 = document.getElementById("open-dialog-box-btn20");
var btn21 = document.getElementById("open-dialog-box-btn21");
var btn22 = document.getElementById("open-dialog-box-btn22");
var btn23 = document.getElementById("open-dialog-box-btn23");
var btn24 = document.getElementById("open-dialog-box-btn24");
var btn25 = document.getElementById("open-dialog-box-btn25");





//When the user clicks the button, open the modal 
btn1.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
  modal.style.display = "block";
}
btn3.onclick = function() {
    modal.style.display = "block";
}
btn4.onclick = function() {
    modal.style.display = "block";
}
btn5.onclick = function() {
    modal.style.display = "block";
}
btn6.onclick = function() {
    modal.style.display = "block";
}
btn7.onclick = function() {
    modal.style.display = "block";
}
btn8.onclick = function() {
    modal.style.display = "block";
}
btn9.onclick = function() {
    modal.style.display = "block";
}
btn10.onclick = function() {
    modal.style.display = "block";
}
btn11.onclick = function() {
    modal.style.display = "block";
}
btn12.onclick = function() {
    modal.style.display = "block";
}
btn13.onclick = function() {
    modal.style.display = "block";
}
btn14.onclick = function() {
    modal.style.display = "block";
}
btn15.onclick = function() {
    modal.style.display = "block";
}
btn16.onclick = function() {
    modal.style.display = "block";
}
btn17.onclick = function() {
    modal.style.display = "block";
}
btn18.onclick = function() {
    modal.style.display = "block";
}
btn19.onclick = function() {
    modal.style.display = "block";
}
btn20.onclick = function() {
    modal.style.display = "block";
}
btn21.onclick = function() {
    modal.style.display = "block";
}
btn22.onclick = function() {
    modal.style.display = "block";
}
btn23.onclick = function() {
    modal.style.display = "block";
}
btn24.onclick = function() {
    modal.style.display = "block";
}
btn25.onclick = function() {
    modal.style.display = "block";
}




// Get the modal end