var images = ['bg-01.jpeg', 'bg-02.jpeg', 'bg-03.jpeg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpeg', 'bg-08.jpg', 'bg-09.jpg', 'bg-10.jpg', 'bg-11.jpg', 'bg-12.jpg', 'bg-13.jpg', 'bg-14.jpg', 'bg-15.jpg', 'bg-16.jpg', 'bg-17.jpg', 'bg-18.jpg', 'bg-19.jpg', 'bg-20.jpg', 'bg-21.jpg', 'bg-22.jpg', 'bg-23.jpg', 'bg-24.jpg', 'bg-25.jpg', 'bg-26.jpg', 'bg-27.jpg', 'bg-28.jpg', 'bg-29.jpg', 'bg-30.jpg', 'bg-31.jpg', 'bg-32.jpg', 'bg-33.jpg', 'bg-34.jpg', 'bg-35.jpg', 'bg-36.jpg', 'bg-37.jpg', 'bg-38.jpg'];

setInterval(function(){
	var dir = 'images/';
	var rnd = Math.floor(Math.random()* images.length) + 1;
	var bg = images[rnd];
	document.querySelector('#slider2').style.backgroundImage = "url(" + dir + bg + ")";
}, 3000);

for(var i=0; i<10; i++){
	console.log(images[i]);
};