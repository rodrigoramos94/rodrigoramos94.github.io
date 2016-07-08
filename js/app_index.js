
window.addEventListener("load",function() {
  	initial_height = document.getElementById('#screen').style.height;
});

var initial_height;

// recoge el alto actual de pantalla imprimible del browser (cualquier browser)
function documentHeight(){
	return h = window.innerHeight
			|| document.documentElement.clientHeight
			|| document.body.clientHeight;
}

function hideAddressBar(){

	document.body.style.height = window.outerHeight;
	
	setTimeout(function(){
		window.scrollTo(0, 1);
		document.body.style.height = window.outerHeight;
	}, 50);
	
}

function showAddressBar(){
	setTimeout(function(){
		document.body.style.height = initial_height;
	}, 50);
}