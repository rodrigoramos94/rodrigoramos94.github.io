
window.addEventListener("load",function() {
  
	hideAddressBar();
});


window.addEventListener("orientationchange", hideAddressBar);

function hideAddressBar(){

	setTimeout(function(){
		document.body.style.height = document.body.style.height + 1;
		window.scrollTo(0, 1);
		document.body.style.height = screen.height;
	}, 50);

}

function showAddressBar(){

	setTimeout(function(){
		window.scrollTo(0, -1);
		document.body.style.height = screen.height;
	}, 50);

}