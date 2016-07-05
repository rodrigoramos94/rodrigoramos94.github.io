
window.addEventListener("load",function() {
  bar_size = window.innerHeight;
});

var bar_size;

function hideAddressBar(){

	setTimeout(function(){
		
		document.body.style.height = bar_size + 1;
		window.scrollBy(0, 1);
		document.body.style.height = window.innerHeight;
	}, 50);

}

function showAddressBar(){

	setTimeout(function(){
		document.body.style.height = bar_size;
		window.scrollBy(0, -50);
	}, 50);

}