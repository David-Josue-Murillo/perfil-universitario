
const checkbox = document.getElementById('form1');
const pie = document.getElementById('pie');
const textContinuar = document.getElementById('Con');
const contenido = document.getElementById('contenido');

const mamiferos = document.getElementById('0');
const aves = document.getElementById('1');
const peces = document.getElementById('2');
const reptiles = document.getElementById('3');
const anfibios = document.getElementById('4');

const img = document.getElementById('fotos');
const contador = document.getElementById('Num');

document.addEventListener('DOMContentLoaded', mostrarPagina);

const fotos = {
    1: '../img/ani01.jpg',
    2: '../img/ani02.jpg',
    3: '../img/ani03.jpg',
    4: '../img/ani04.jpg',
    5: '../img/ani05.jpg',
    6: '../img/ani06.jpg',
    7: '../img/ani07.jpg',
    8: '../img/ani08.jpg',
    9: '../img/ani09.jpg',
    10: '../img/ani10.jpg',
}

const vertebradosObj = {
    0: mamiferos,
    1: aves,
    2: peces,
    3: reptiles,
    4: anfibios,
}

const respuestas = ['peces', 'reptiles', 'anfibios', 'mamiferos', 'mamiferos', 'anfibios', 'aves', 'mamiferos', 'reptiles', 'aves'];
let listaVertebrados = [];

function mostrarPagina(){
    resetearPagina();
    const nombre = prompt('¿Cual es tu nombre?');
    const nombreUsuario = document.getElementById('nombre');

    checkbox.addEventListener('change', guardarOpcion);
    checkbox.name = 'c';


    textoNombre = document.createElement('h2');
    textoNombre.textContent = `<i><strong>${nombre}</strong></i> ${nombreUsuario.textContent}`;
    nombreUsuario.innerHTML = textoNombre.textContent;
    
    textContinuar.style.color = 'red';
}

function guardarOpcion(e) {
    textContinuar.addEventListener('click', continuarImagen);
    
    const opcion = parseInt(e.target.id);
    checkbox.classList.value = '';
    checkbox.classList.add(opcion);
}

function continuarImagen(e){
    
    const contador = document.getElementById('Num');
    const imagen = document.getElementById('fotos');
    let checkValue = checkbox.classList.value;
    const idVertebrados = document.getElementById(checkValue).value;

    let numContador = parseInt(contador.textContent) + 1;

    if(numContador <= 10){
        contador.textContent = numContador;
        imagen.src = fotos[numContador];     
    }else if(numContador === 11){
        const {correctos, incorrectos} = mostrarResultado();
        nombre.textContent = 'Has completado la prática';
        textContinuar.textContent = `Eran 10 animales y lograste clasificar correctamente ${correctos}, teniendo ${incorrectos} fallas.   Haga un clic sobre este texto para ver la práctica resuelta correctamente.`;
        
        const continuar = document.getElementById('Con');
        continuar.addEventListener('click', resultadosFinales)
    } 


    let lista = [];
    listaVertebrados.push(idVertebrados)
}       

function mostrarResultado(){
    let correctos = 0;
    let incorrectos = 0;
    for(let i = 0; i < respuestas.length; i++){
        if(respuestas[i] === listaVertebrados[i]){
            correctos++;
            continue
        }
        incorrectos++
    }

    return {
        correctos,
        incorrectos
    }
}

function resultadosFinales(e){
    textContinuar.textContent = 'Continuar';
    const p = document.createElement('p');
    p.classList.add('resultadosP');

    const {correctos, incorrectos} = mostrarResultado();

    p.classList.add('resultados');
    p.innerHTML = `
        Cantidad Acertada: ${correctos} <br>
        Cantidad Fallada: ${incorrectos} <br>
    `;

    contenido.append(p);
    p.addEventListener('click', resultadoPractica);

    textContinuar.removeEventListener('click', resultadosFinales);
}


function resultadoPractica(e){
    const resultadosP = document.querySelector('.resultadosP');
    resultadosP.remove();
    
    contador.textContent = '0';
    nombre.textContent = 'Práctica resuelta correctamente';

    Object.values(vertebradosObj).forEach(vertebrado => {
        vertebrado.value === respuestas[0] ? vertebrado.checked = true : vertebrado.checked = false;
    });
    
    let numContador = parseInt(contador.textContent) + 1;
    if(numContador <= 10){
        contador.textContent = numContador;
        img.src = fotos[numContador];
        textContinuar.addEventListener('click', mostrandoResultado);
    }
   
}

function mostrandoResultado(){
    const cont = parseInt(contador.textContent)

    Object.values(vertebradosObj).forEach(vertebrado => {
        vertebrado.value === respuestas[cont - 1] ? vertebrado.checked = true : vertebrado.checked = false;
    });
}

function resetearPagina(){
    contador.textContent = '1';
    img.src = fotos[1];
    textContinuar.textContent = 'Continuar';
    listaVertebrados = [];
    Object.values(vertebradosObj).forEach(vertebrado => {
        vertebrado.checked = false;
    });
}   
