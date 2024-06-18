import React from 'react'
import img from '../img/fiec.png'
import { Tareas } from './Tareas'

export default function Header() {
  return (
    <>
        <div className="flex py-2 px-20 justify-between items-center">
            <div className=''>
                <p className='bg-clip-text bg-gradient-to-t from-green-700 via-green-500 to-green-300 text-transparent font-bold text-xl'>LIGEE</p>
            </div>
            <nav className='flex justify-center'>
                <ul className='flex flex-row gap-10'>
                    <li className='hover:border-b-2 hover:border-b-lime-700'>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Tareas</a>
                    </li>
                    <li className='hover:border-b-2 hover:border-b-lime-700'>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Parciales</a>
                    </li>
                    <li className='hover:border-b-2 hover:border-b-lime-700'>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Laboratorios</a>
                    </li>
                    <li className='hover:border-b-2 hover:border-b-lime-700'>
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
