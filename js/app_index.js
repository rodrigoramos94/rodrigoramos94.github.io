
function hideAddressBar(){

	setTimeout(function(){
		document.body.style.height = document.body.style.height + 1;
		window.scrollTo(0, 1);
		document.body.style.height = window.outerHeight;
	}, 50);

}

window.addEventListener("load",function() {
  
	hideAddressBar();
});


window.addEventListener("orientationchange", hideAddressBar);
