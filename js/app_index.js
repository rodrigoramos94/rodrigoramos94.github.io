
window.addEventListener("load",function() {
  bar_size = window.innerHeight;
});

var bar_size;

function hideAddressBar(){

	document.body.style.height = bar_size + 1;
	
	setTimeout(function(){
		window.scrollBy(0, 1);
		document.body.style.height = window.innerHeight;
	}, 50);

}

function showAddressBar(){

	document.body.style.height = bar_size;
	
	setTimeout(function(){
		window.scrollBy(0, -50);
	}, 50);

}