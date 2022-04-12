import React from 'react'
import '../Estilos/Boton.css'

const Boton = (props) => {
  return (
    <button className={props.tipoBoton} >{props.titulo}</button>
  )
}

export default Boton