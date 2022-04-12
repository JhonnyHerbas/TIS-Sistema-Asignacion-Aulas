import React, { useState } from 'react'
import InputMateria from './InputMateria'
import { Materia } from './Materia'

const Materias = () => {
    const [listaMaterias , setListaMaterias] = useState([]);
    const agregarMateria = (materia) => {
        const materiasActualizadas = [ materia, ...listaMaterias];
        setListaMaterias(materiasActualizadas);
        console.log(listaMaterias);
    }
  return (
    <div className='contenedor-materias'>
        <InputMateria onSubmit = {agregarMateria}/>
        <div className='contenedor-materias'>
            {
                listaMaterias.map((materia) =>
                    <Materia
                     nombremateria = {materia.nombre}
                     grupo = {materia.grupo}
                    />
                )
            }
        </div>
    </div>
  )
}

export default Materias