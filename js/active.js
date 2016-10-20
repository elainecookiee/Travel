//ACTIVE CLASS NAV
window.addEventListener('load', init);

function init(){
	window.addEventListener("scroll", respondToScroll);

};


function respondToScroll(){
	var scrollY = window.scrollY;
	var winHeight = window.innerHeight;

	//Finding the top of each selection, log it
	var home = document.querySelector('.slider').offsetTop;
	var wrapper = document.querySelector('#wrapper').offsetTop;
	var slider2 = document.querySelector('#slider2').offsetTop;
	var slider3 = document.querySelector('#slider3').offsetTop;

	// console.log("home: " + home);
	// console.log("gallery: " + wrapper);
	// console.log("travel: " + slider2);
	// console.log("connect: " + slider3);

	//if current scroll is greater or equal to the top of each section
	//add/remove styling for active class
	if(scrollY >= home && scrollY < wrapper){
		document.querySelector('#home').classList.add("active");
		document.querySelector('#gal').classList.remove("active");
		document.querySelector('#connect').classList.remove("active");
	} else if (scrollY >= wrapper && scrollY < slider2){
		document.querySelector('#gal').classList.add("active");
		document.querySelector('#home').classList.remove("active");
		document.querySelector('#travel').classList.remove("active");
	} else if (scrollY >= slider2 && scrollY < slider3-winHeight){
		document.querySelector('#travel').classList.add("active");
		document.querySelector('#gal').classList.remove("active");
		document.querySelector('#connect').classList.remove("active");
	} else {
		document.querySelector('#connect').classList.add("active");
		document.querySelector('#travel').classList.remove("active");
		document.querySelector('#gal').classList.remove("active");
	}
}
