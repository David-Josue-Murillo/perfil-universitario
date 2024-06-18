
const subtitulo = document.getElementById('subtitulo');
const contenido = document.getElementById('contenido');

const nombre = document.getElementById('Nombre').value;
const genero = document.getElementsByName('Radio');
const Femenino = document.getElementById('Femenino');
const Masculino = document.getElementById('Masculino');
const opciones = document.getElementById('opciones').value;
const check1 = document.getElementById('check1').value;
const check2 = document.getElementById('check2').value;


const prueba = (genero) =>{
    genero.forEach(sexo => {
        if(sexo.checked){
            formularioObj.Genero = sexo.value;
        }
    });
}

const formularioObj = {
    Nombre: nombre,
    Genero: '',
    Carrera: opciones,
    Materias: check1
}

window.addEventListener('click', () => {prueba(genero)});



 
subtitulo.addEventListener('mouseenter', cambiarFondo);
subtitulo.addEventListener('click', mostrarContenido);


function cambiarFondo(e) {
    subtitulo.style.backgroundColor = 'yellow';
    subtitulo.style.color = 'green';
}

function mostrarContenido(e) {
    contenido.innerHTML = '';
    mostrarHTML(e.target.id);
}

function mostrarHTML(id) {
    const requisitos = document.getElementById('requisitos');
    const egreso = document.getElementById('egreso');
    const estudios = document.getElementById('estudios');
    const datos = document.getElementById('datos');

    contenido.innerHTML = '';
    const titulo = document.createElement('h2');
    const parrafo = document.createElement('p');
    const lista = document.createElement('ol');


    if (id === requisitos.id) {
        titulo.textContent = 'Requisitos para la Licenciatura en la Gestión Educativa y Empresarial';
        parrafo.textContent = 'Para ingresar a la Licenciatura en la Gestión Educativa y Empresarial, el aspirante deberá cumplir con los siguientes requisitos:';
        lista.innerHTML = `

            <li>Acta de nacimiento original y copia</li>
            <li>Bachiller en ciencias</li>
        `;
    } else if (id === egreso.id) {
        titulo.textContent = 'Perfil del Licenciado';
        parrafo.textContent = 'El licenciado en Ingeniería en Informática egresado de esta carrera debe ser un profesional de la ingeniería poseedor de conocimientos multidisciplinarios, científicos y tecnológicos necesarios para aplicar la informática en diversos ambientes tales como: ';
        lista.innerHTML = `
            <li>Teleinformática</li>
            <li>Industria</li>
            <li>Comercio</li>
            <li>Educación</li>
            <li>Doméstico</li>
        `;

    } else if (id === estudios.id) {
        const primerBtn = document.createElement('button');
        const segundoBtn = document.createElement('button');
        const terceroBtn = document.createElement('button');

        primerBtn.textContent = 'Plan de estudios 1 año';
        segundoBtn.textContent = 'Plan de estudios 2 año';
        terceroBtn.textContent = 'Plan de estudios 3 año';

        primerBtn.id = 'plan1';
        segundoBtn.id = 'plan2';
        terceroBtn.id = 'plan3';

        titulo.textContent = 'Plan de estudios';
        parrafo.textContent = 'Clickea el plan de estudios que deseas consultar';
        lista.appendChild(primerBtn);
        lista.appendChild(segundoBtn);
        lista.appendChild(terceroBtn);


        primerBtn.addEventListener('click', mostrarPlanImagen);
        segundoBtn.addEventListener('click', mostrarPlanImagen);
        terceroBtn.addEventListener('click', mostrarPlanImagen);

    } else if (id === datos.id) {
        titulo.textContent = 'Datos';
        contenido.appendChild(titulo);
        rellenarForm();
    }

    contenido.appendChild(parrafo);
    contenido.appendChild(lista);
}

function mostrarPlanImagen(e) {
    const imagen = document.createElement('img');
    contenido.innerHTML = '';

    if (e.target.id === 'plan1') {
        imagen.src = '../img/I_A.gif';
    } else if (e.target.id === 'plan2') {
        imagen.src = '../img/II_A.gif';
    } else if (e.target.id === 'plan3') {
        imagen.src = '../img/III_A.gif';
    }

    contenido.appendChild(imagen);
}


function rellenarForm(){
    const name = document.getElementById('Nombre');
    const masculino = document.getElementById('Masculino');
    const carrera = document.getElementById('opciones');
    const check2 = document.getElementById('check2');

    name.value = 'David'
    masculino.checked = true;
    check2.checked = true;
    carrera.options[2].selected = true;

    formularioObj.Nombre = name.value;
    formularioObj.Carrera = carrera.value;
    mostrarDatos(masculino);
}

function mostrarDatos(genero){
    Object.keys(formularioObj).forEach(key => {
        const p = document.createElement('p');
        p.textContent = `${key}: ${formularioObj[key]}`;
        if(key === 'Genero'){
            p.textContent = `${key}: ${genero.value}`;
        }
        contenido.appendChild(p);
    });
}

// Resetear contenido del formulario
document.addEventListener('DOMContentLoaded', () => {
    const name = document.getElementById('Nombre');
    const masculino = document.getElementById('Masculino');
    const carrera = document.getElementById('opciones');
    const check2 = document.getElementById('check2');

    name.value = ''
    masculino.checked = false;
    check2.checked = false;
    carrera.options[2].selected = false;
});