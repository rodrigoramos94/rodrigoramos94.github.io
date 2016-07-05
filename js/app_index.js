
function hideAddressBar(){

	if(document.height < window.outerHeight + 10){
		document.body.style.height = (window.outerHeight + 50) + 'px';
	}

	setTimeout(function(){
		window.scrollTo(0, 1);
	}, 50);

}

window.addEventListener("load",function() {
  setTimeout(function(){
	window.scrollTo(0, 1);
	  document.body.style.height = window.outerHeight;
  }, 0);
	
	
});

/*
window.addEventListener("load", function(){

	if(!window.pageYOffset){
		hideAddressBar();
	}

	window.addEventListener("orientationchange", hideAddressBar);

});

*/