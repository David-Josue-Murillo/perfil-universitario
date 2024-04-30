import React from 'react'
import img from '../img/img.jpg'

export default function Main() {
  return (
    <>
        <main className='bg-black'>
            <div className='container flex justify-center items-center mx-auto py-10    '>
                <section className='flex flex-col w-2/6 mr-4'>
                    <div className='mb-3'>
                        <h1 className='text-4xl font-bold bg-clip-text bg-gradient-to-r from-indigo-500 to-pink-500 text-transparent'>¡Hi! Soy David Murillo</h1>
                        <h2 className='text-2xl font-bold text-green-200'>Tecnologia web 2</h2>
                    </div>

                    <div>
                        <p className='text-sm text-white'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt metus eu sollicitudin viverra. Ut sollicitudin felis ut turpis maximus mattis. Cras ac dolor sed purus dapibus hendrerit. Sed scelerisque, libero id pulvinar lacinia, mauris tellus venenatis tortor, in finibus urna libero eu nulla.</p>
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
