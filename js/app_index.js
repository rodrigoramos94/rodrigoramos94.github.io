
window.addEventListener("load",function() {
  
});



function hideAddressBar(){

	setTimeout(function(){
		document.body.style.height = screen.height + 1;
		window.scrollBy(1, 0);
		document.body.style.height = screen.height;
	}, 50);

}

function showAddressBar(){

	setTimeout(function(){
		window.scrollBy(-100, 0);
		document.body.style.height = screen.height;
	}, 50);

}