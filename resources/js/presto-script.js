

/* ANIMATION CARD */

function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 100;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);


reveal();



const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
  toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
  })
}


// nav change flag

// let myImg = document.getElementById('myImg');

// let imgForm = document.getElementById('imgForm');



// console.log(imgForm);


// document.getElementById("imgForm").onclick = function () { myFunction() };

// function myFunction() {


//   document.getElementById("myImg").src = "{{asset('vendor/blade-flags/language-' .it. '.svg')}}";
// }