
window.addEventListener("load",function() {
  bar_size = document.body.style.height;
});

var bar_size;

function hideAddressBar(){

	setTimeout(function(){
		
		document.body.style.height = screen.height + 1;
		window.scrollBy(0, 1);
		//document.body.style.height = screen.height;
	}, 50);

}

function showAddressBar(){

	setTimeout(function(){
		document.body.style.height = bar_size;
		window.scrollBy(0, -100);
	}, 50);

}