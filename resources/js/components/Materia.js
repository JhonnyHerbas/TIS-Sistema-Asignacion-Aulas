import React from 'react'
import '../Estilos/Materia.css'
export const Materia = (props) => {
  return (
    <div className='contenedor-materia'>
        <p>{props.nombremateria}</p>
        <p>{props.grupo}</p>

    </div>
  )
}
