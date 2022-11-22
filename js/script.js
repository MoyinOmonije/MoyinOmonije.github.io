const header = document.querySelector("header");

window.addEventListener("scroll", function() {
    header.classList.toggle("sticky",window.scrollY > 0);
})

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x')
	navbar.classList.toggle('active');
};

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navbar.classList.remove('active');
};

const sr = ScrollReveal ({
	distance: '25px',
	duration: 2500,
	reset: true
})

sr.reveal('.home-text',{delay:190, origin:'bottom'})

sr.reveal('.about,.skills,.portfolio,.contact',{delay:200, origin:'bottom'})

function sendEmail(){
	Email.send({
		Host : "smtp.gmail.com",
		Username : "moyinsibs2@gmail.com",
		Password : "SternalHen8612",
		To : 'moyinsibs@gmail.com',
		From : document.getElementById("email").value,
		Subject :  document.getElementById("subject").value,
		Body : "Name " + document.getElementById("name").value
			+ "<br> Email: " + document.getElementById("email").value
			+ "<br> Message: " + document.getElementById("body").value
	}).then(
	message => alert("Your message was sent successfully! I'll get back to you shortly")
	);
}