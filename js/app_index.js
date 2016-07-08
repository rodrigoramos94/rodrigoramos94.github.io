
window.addEventListener("load",function() {
  	
});

var initial_height;

// recoge el alto actual de pantalla imprimible del browser (cualquier browser)
function documentHeight(){
	return h = window.innerHeight
			|| document.documentElement.clientHeight
			|| document.body.clientHeight;
}

function hideAddressBar(){

	document.body.style.height += documentHeight();
	
	setTimeout(function(){
		window.scrollTo(0, 1);
	}, 50);
	
}

function showAddressBar(){
	
	document.body.style.height = window.innerHeight;
	
	setTimeout(function(){
		window.scrollBy(-100, -100);
	}, 50);
}