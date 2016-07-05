
window.addEventListener("load",function() {
  initial_height = documentHeight();
});

var initial_height;

// recoge el alto actual de pantalla imprimible del browser (cualquier browser)
function documentHeight(){
	return h = window.innerHeight
			|| document.documentElement.clientHeight
			|| document.body.clientHeight;
}

function hideAddressBar(){

	document.body.style.height = document.body.style.height + 1;
	
	setTimeout(function(){
		window.scrollTo(0, 1);
	}, 50);
	document.body.style.height = documentHeight();
}

function showAddressBar(){

	window.scrollBy(0, -50);
	window.scrollBy(0, -50);
	document.body.style.height = window.innerHeight;
	
	setTimeout(function(){
		document.body.style.height = initial_height;
	}, 50);

}