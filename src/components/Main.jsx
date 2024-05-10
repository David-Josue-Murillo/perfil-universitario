import React from 'react'
import img from '../img/img.jpg'

export default function Main() {
  return (
    <>
        <main>
            <div className='container flex justify-center items-center mx-auto py-10    '>
                <section className='flex flex-col w-2/6 mr-4'>
                    <div className='mb-3'>
                        <h1 className='text-4xl font-bold bg-clip-text bg-gradient-to-r from-indigo-500 to-pink-500 text-transparent'>¡Hi! Soy David Murillo</h1>
                        <h2 className='text-2xl font-bold text-green-200'>Tecnologia web 2</h2>
                    </div>

                    <div>
                        <p className='text-sm text-white'>Soy estudiante de la Universidad de Panamá y estudio una liceniatura en informática para la gestión educativa y empresarial, tengo 20 años y me apasiona mucho la tecnología, especialmente el desarrollo web. Mi objetivo es mejorar mis habilidades y conocimientos en este campo. Disfruto de desafíos técnicos que me permiten poner en práctica lo aprendido en mis estudios universitarios. Además, busco nuevas oportunidades para aplicar mis habilidades en proyectos interesantes y creativos. Mi pasión por la tecnología me impulsa a seguir explorando diferentes lenguajes de programación y técnicas de diseño web para seguir creciendo profesionalmente.</p>
                    </div>
                </section>

                <section className='w-3/6'>
                    <div className=''>
                        <img className='w-full h-full border rounded-lg' src={img}></img>
                    </div>
                </section>
            </div>

            <div>

            </div>
        </main>
    </>
  )
}
