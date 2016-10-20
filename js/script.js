window.addEventListener('load', init);

//CLICK to start Plane Animation
function init() {
	window.addEventListener('click', respondToClick);
}

function respondToClick( ev ){
	var pl = document.querySelector("#plane");
	pl.className = "plane";
	setTimeout(7500);
};

//SET TIME OUT and SCROLL
setTimeout(function( ev ){
	window.scrollTo(0, document.querySelector('#wrapper').offsetTop);
}, 7500);



