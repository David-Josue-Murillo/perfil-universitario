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
                            <a className='text-sky-100 font-bold hover:text-green-400' href="#">Tareas</a>
                            <ul>
                                <li className='hover:border-b-2 hover:border-b-lime-700'>
                                    <a href='http://tecnologia-web.free.nf/tareas/tarea_1/' className='text-sky-100 font-bold hover:text-green-400' >Tarea 1</a>
                                </li><li className='hover:border-b-2 hover:border-b-lime-700'>
                                    <a href='http://tecnologia-web.free.nf/tareas/tarea_2/' className='text-sky-100 font-bold hover:text-green-400' >Tarea 2</a>
                                </li><li className='hover:border-b-2 hover:border-b-lime-700'>
                                    <a href='http://tecnologia-web.free.nf/tareas/tarea_3/' className='text-sky-100 font-bold hover:text-green-400' >Tarea 3</a>
                                </li>
                                <li className='hover:border-b-2 hover:border-b-lime-700'>
                                    <a href='http://tecnologia-web.free.nf/tareas/tarea_4/' className='text-sky-100 font-bold hover:text-green-400' >Tarea 4</a>
                                </li>
                                <li className='hover:border-b-2 hover:border-b-lime-700'>
                                    <a href='http://tecnologia-web.free.nf/tareas/tarea_5/' className='text-sky-100 font-bold hover:text-green-400'>Tarea 5</a>
                                </li>
                                <li className='hover:border-b-2 hover:border-b-lime-700'>
                                    <a href='http://tecnologia-web.free.nf/tareas/tarea_6/' className='text-sky-100 font-bold hover:text-green-400'>Tarea 6</a>
                                </li>
                                <li className='hover:border-b-2 hover:border-b-lime-700'>
                                    <a href='http://tecnologia-web.free.nf/tareas/tarea_7/' className='text-sky-100 font-bold hover:text-green-400'>Tarea 7</a>
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
