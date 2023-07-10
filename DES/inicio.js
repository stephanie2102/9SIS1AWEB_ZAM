// Función para cifrar el archivo
function cifrarArchivo() {
  const archivo = document.getElementById('archivo').files[0];
  const clave = document.getElementById('clave').value;

  const reader = new FileReader();
  reader.onload = function (e) {
    const contenido = e.target.result;

    // Cifrar el contenido utilizando CryptoJS
    const mensajeCifrado = CryptoJS.AES.encrypt(contenido, clave).toString();

    // Crear un enlace de descarga para el archivo cifrado
    function downloadFile(filename, content) {
      var element = document.createElement('a');
      element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(content));
      element.setAttribute('download', filename);
      element.style.display = 'none';
      document.body.appendChild(element);
      element.click();
      document.body.removeChild(element);
  }
  };

  reader.readAsText(archivo);
}

// Función para descifrar el archivo
function descifrarArchivo() {
  const mensajeCifrado = document.getElementById('mensajeCifrado').value;
  const clave = document.getElementById('clave').value;

  // Descifrar el mensaje utilizando CryptoJS
  const contenidoDescifrado = CryptoJS.AES.decrypt(mensajeCifrado, clave).toString(CryptoJS.enc.Utf8);

  // Crear un enlace de descarga para el archivo descifrado
  const enlaceDescarga = document.createElement('a');
  enlaceDescarga.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(contenidoDescifrado));
  enlaceDescarga.setAttribute('download', 'archivo_descifrado.txt');
  enlaceDescarga.style.display = 'none';
  document.body.appendChild(enlaceDescarga);

  // Simular un clic en el enlace de descarga para iniciar la descarga
  enlaceDescarga.click();
  document.body.removeChild(enlaceDescarga);
}
