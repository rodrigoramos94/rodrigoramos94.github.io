
window.addEventListener("load",function() {
  	document.body.style.height = screen.height;
});

var initial_height;

// recoge el alto actual de pantalla imprimible del browser (cualquier browser)
function documentHeight(){
	return h = window.innerHeight
			|| document.documentElement.clientHeight
			|| document.body.clientHeight;
}

function hideAddressBar(){

	document.body.style.height = screen.height;
	
	setTimeout(function(){
		window.scrollTo(0, 1);
	}, 50);
	
}
