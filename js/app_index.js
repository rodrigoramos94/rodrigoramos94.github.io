
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

	document.body.style.height = bar_size + 1;
	
	setTimeout(function(){
		window.scrollBy(0, 1);
		document.body.style.height = window.innerHeight;
	}, 50);

}

function showAddressBar(){

	window.scrollBy(0, -50);
	window.scrollBy(0, -50);
	document.body.style.height = window.innerHeight;
	
	setTimeout(function(){
		document.body.style.height = initial_height;
	}, 50);

}