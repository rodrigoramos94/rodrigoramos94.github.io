
function eraseHeadBrowser(){
	open('index.html', 'principal', 'location=no,menubar=no,status=no,toolbar=no'); 
    cerrar();
}

function cerrar() { 
	var ventana = window.self; 
	ventana.opener = window.self; 
	ventana.close(); 
} 