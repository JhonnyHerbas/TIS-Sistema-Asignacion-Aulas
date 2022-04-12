import React,  { useState } from 'react'
import '../Estilos/InputMateria.css'

const InputMateria = (props) => {
  const [inputnombre , setInputnombre] = useState('');
  const [inputgrupo , setInputgrupo ] = useState('');

  

  const manejarnombre = e => {
    setInputnombre(e.target.value);
    console.log(inputnombre);
  }
  const manejargrupo = e => {
    setInputgrupo(e.target.value);
    console.log(inputgrupo);
  }
  function manejarEnvio (e){
    e.preventDefault();
    console.log("hola");
  }
 
  return (
    <div className='contendedor-input-materia'>
      <form  className='input-materia' onSubmit={manejarEnvio} >
         <input type='text' placeholder='Nombre materia' onChange={manejarnombre}/>
          <input type='text' placeholder='Grupo'  onChange={manejargrupo}/>
         <button type='submit' className='boton-agregar-materia'>Agregar</button>

      </form>
       
    </div>
  )
}

export default InputMateria