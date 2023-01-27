function myfun() {
  const mnu = document.getElementById("navbarNav");
  var pos = -100;
  var id = setInterval(frame, 1);
  function frame() {
    if (pos == 0) {
      clearInterval(id);
    } else {
      pos++;
      mnu.style.right = pos + "px";
      // mnu.style.right = pos + "px";
    }
  }

  if (mnu.style.display === "block") {
    mnu.style.display = "none";
  } else {
    mnu.style.display = "block";
  }
}

/*
// var btn = document.getElementById(btn);
window.onload = function modalfun(modal, btn) {
  var modal = document.getElementById(modal);
  var btn = document.getElementById(btn);
  // Get the modal

  // Get the button that opens the modal

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the modal
  btn.onclick = function () {
    modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
};
modalfun("myModal1","modalbtn1");
*/












// --------------text animation---------------------

window.addEventListener('scroll', reveal);

function reveal() {
  var reveals = document.querySelectorAll('.reveal');

  for (var i = 0; i < reveals.length; i++) {

    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 150;

    if (revealtop < windowheight - revealpoint) {
      reveals[i].classList.add('active');
    }
    else {
      reveals[i].classList.remove('active');
    }
  }
}

window.addEventListener('scroll', reveal2);

function reveal2() {
  var reveals = document.querySelectorAll('.reveal2');

  for (var i = 0; i < reveals.length; i++) {

    var windowheight = window.innerHeight;
    var revealtop = reveals[i].getBoundingClientRect().top;
    var revealpoint = 150;

    if (revealtop < windowheight - revealpoint) {
      reveals[i].classList.add('active');
    }
    else {
      reveals[i].classList.remove('active');
    }
  }
}