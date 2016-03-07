var querystring = require("querystring");

function iniciar(response, postData) {
  console.log("Manipulador de petición 'iniciar' ha sido llamado.");

   var body = '<html>'+
    '<head>'+
    '<meta http-equiv="Content-Type" content="text/html" />'+
    '</head>'+
    '<body>'+
    '<form action="/subir" method="post">'+
    '<textarea name="text" rows="10" cols="60"></textarea>'+
    '<input type="submit" value="Enviar texto" />'+
    '</form>'+
    '</body>'+
    '</html>';

    response.writeHead(200, {"Content-Type": "text/html"});
    response.write(body);
    response.end();
}

function subir(response, dataPosteada) {
  console.log("Manipulador de petición 'subir' ha sido llamado.");
  response.writeHead(200, {"Content-Type": "text/html"});
  response.write("Tu enviaste el texto: " + querystring.parse(dataPosteada)["text"]);
  response.end();
}

exports.iniciar = iniciar;
exports.subir = subir;