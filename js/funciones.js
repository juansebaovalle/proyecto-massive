const body = document.body;
let lastScroll = 0;

window.addEventListener("scroll", () => {
	const currentScroll = window.pageYOffset;
	if (currentScroll <= 0) {
		body.classList.remove("scroll-up");
		return;
	}

	if (currentScroll > lastScroll && !body.classList.contains("scroll-down")) {
		body.classList.remove("scroll-up");
		body.classList.add("scroll-down");
	} else if (
		currentScroll < lastScroll &&
		body.classList.contains("scroll-down")
	) {
		body.classList.remove("scroll-down");
		body.classList.add("scroll-up");
	}
	lastScroll = currentScroll;


});


function parallax() {
	fondo.style.top = -(window.pageYOffset / 2) + "px";
	first.style.top = -(window.pageYOffset / 10) + "px";
}
function start() {
	fondo = document.querySelector("#fondo");
	first = document.querySelector("#first");
}
window.addEventListener("scroll", parallax);
window.addEventListener("load", start);


ScrollReveal().reveal('.headline');
ScrollReveal().reveal('.tagline', { delay: 500 });
ScrollReveal().reveal('.punchline', { delay: 1000 });



// Obtener la URL actual
const urlActual = window.location.href;

// Obtener los enlaces del menú
const enlaces = document.querySelectorAll('.navigation li a');

// Recorrer los enlaces del menú y comparar la URL actual con cada enlace
enlaces.forEach(enlace => {
  if (enlace.href === urlActual) {
    // Agregar la clase "active" al elemento <li> correspondiente
    enlace.parentElement.classList.add('active');
  }
});



