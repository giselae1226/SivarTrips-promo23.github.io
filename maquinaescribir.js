

const palabras = ["Los mejores recorridos.", "Los mejores recuerdos.", "Las mejores experiencias."]; 

const maquinaDeEscribir = document.getElementById("maquina-de-escribir");
let indicePalabrasActual = 0;

function escribirPalabra(palabra) {
  let i = 0;
  const intervalo = setInterval(() => {
    maquinaDeEscribir.textContent += palabra[i];
    i++;
    if (i === palabra.length) {
      clearInterval(intervalo);
      setTimeout(() => {
        borrarPalabra(palabra);
      }, 1000);
    }
  }, 100);
}

function borrarPalabra(palabra) {
  let i = palabra.length - 1;
  const intervalo = setInterval(() => {
    if (i >= 0) {
      maquinaDeEscribir.textContent = maquinaDeEscribir.textContent.slice(0, -1);
      i--;
    } else {
      clearInterval(intervalo);
      setTimeout(() => {
        escribirSiguientePalabra();
      }, 1000);
    }
  }, 100);
}

function escribirSiguientePalabra() {
  const palabraActual = palabras[indicePalabrasActual];
  escribirPalabra(palabraActual);
  indicePalabrasActual = (indicePalabrasActual + 1) % palabras.length;
}

escribirSiguientePalabra();