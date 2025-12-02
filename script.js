// var swiper = new Swiper(".testimonialSwiper", {
//   loop: false,
//   centeredSlides: true,
//   grabCursor: true,
//   speed: 800,
//   spaceBetween: 30,
//   loopAdditionalSlides: 8,

//   breakpoints: {
//     425: { slidesPerView: 3 },
//     768: { slidesPerView: 3 },
//     992: { slidesPerView: 3 }
//   }
// });

function company_carouselInit() {
  $('.owl-carousel.slider_active').owlCarousel({
    loop: true,
    margin: 30,
    stagePadding: 2,
    center: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1,
      },
      992: {
        items: 3
      }
    }
  });
}
company_carouselInit();


document.addEventListener("DOMContentLoaded", function () {
  const accordions = document.querySelectorAll('.accordion-button');

  accordions.forEach((btn) => {
    btn.addEventListener('click', function () {
      // remove old active classes
      accordions.forEach(b => b.classList.remove('active-acc'));
      document.querySelectorAll('.accordion-body').forEach(body => body.classList.remove('active-body'));

      // add new classes to current active item
      if (!this.classList.contains('collapsed')) {
        this.classList.add('active-acc');
        const body = this.closest('.accordion-item').querySelector('.accordion-body');
        body.classList.add('active-body');
      }
    });
  });
});
/* Pricing Section */

document.querySelectorAll('.pricing-tab').forEach(btn => {
  btn.addEventListener('click', function () {

    document.querySelectorAll('.pricing-tab').forEach(b => b.classList.remove('active'));
    this.classList.add('active');

    document.querySelectorAll('.pricing-content').forEach(sec => sec.classList.add('d-none'));

    const target = this.getAttribute('data-target');
    document.querySelector(target).classList.remove('d-none');
  });
});

const password = document.getElementById("password");
const toggle = document.getElementById("togglePassword");

toggle.addEventListener("click", function () {
  if (password.type === "password") {
    password.type = "text";
    toggle.classList.remove("bi-eye-fill");
    toggle.classList.add("bi-eye-slash-fill");
  } else {
    password.type = "password";
    toggle.classList.remove("bi-eye-slash-fill");
    toggle.classList.add("bi-eye-fill");
  }
});


function goToStep(step) {

  // Hide all steps
  document.querySelectorAll(".step-box").forEach(box => {
    box.classList.remove("active");
  });

  // Show selected step
  document.getElementById("step" + step).classList.add("active");

  // Update circles
  document.querySelectorAll(".step-circle").forEach(c => {
    c.classList.remove("active");
  });

  // Highlight current step
  document.getElementById("s" + step).classList.add("active");
}




