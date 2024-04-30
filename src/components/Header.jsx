import React from 'react'
import img from '../img/fiec.png'

export default function Header() {
  return (
    <>
        <div className="bg-black flex py-2 px-20 justify-between items-center">
            <div className=''>
                <p className='bg-clip-text bg-gradient-to-t from-green-700 via-green-500 to-green-300 text-transparent font-bold text-xl'>LIGEE</p>
            </div>
            <nav className='flex justify-center'>
                <ul className='flex flex-row gap-10'>
                    <li>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Practicas</a>
                    </li>
                    <li>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Ejercicios</a>
                    </li>
                    <li>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Laboratorios</a>
                    </li>
                    <li>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Proyectos</a>
                    </li>
                </ul>
            </nav>
            <div className=''>
                <div className='w-[115px] h-20' >
                    <img className='w-full h-full' src={img}></img>
                </div>
            </div>
        </div>
    </>
  )
}
