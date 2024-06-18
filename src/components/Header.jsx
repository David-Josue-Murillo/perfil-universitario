import React from 'react'
import img from '../img/fiec.png'
import { Tareas } from './Tareas'

export default function Header() {
  return (
    <>
        <div className="flex py-2 px-20 justify-between items-center 2xl:w-4/5 2xl:mx-auto">
            <div className=''>
                <p className='bg-clip-text bg-gradient-to-t from-green-700 via-green-500 to-green-300 text-transparent font-bold text-xl'>LIGEE</p>
            </div>

            <nav className='flex relative mx-auto nav_menu'>
                <ul className='flex flex-row gap-10'>
                    <li className='hover:border-b-2 hover:border-b-lime-700 relative hover:flex'>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Practicas</a>
                        <ul>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="./public/Tasks/Tarea-4/index.html">Tarea 4</a>
                            </li>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="./public/Tasks/Tarea-5/index.html">Tarea 5</a>
                            </li>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="./public/Tasks/Tarea-6/index.html">Tarea 6</a>
                            </li>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="./public/Tasks/Tarea-7/index.php">Tarea 7</a>
                            </li>
                        </ul>
                    </li>

                    <li className='hover:border-b-2 hover:border-b-lime-700 relative'>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Parciales</a>
                        <ul>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="#">Parcial 1</a>
                            </li>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="#">Parcial 2</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li className='hover:border-b-2 hover:border-b-lime-700 relative'>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Laboratorios</a>
                        <ul>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="#">Lab 1</a>
                            </li>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="#">Lab 2</a>
                            </li>
                        </ul>
                    </li>

                    <li className='hover:border-b-2 hover:border-b-lime-700 relative'>
                        <a className='text-sky-100 font-bold hover:text-green-400' href="#">Proyectos</a>
                        <ul>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="#">Proj 2</a>
                            </li>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="#">Proj 1</a>
                            </li>
                            <li className='hover:border-b-2 hover:border-b-lime-700'>
                                <a className='text-sky-100 font-bold hover:text-green-400' href="#">Proj 3</a>
                            </li>
                        </ul>
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
