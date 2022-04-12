import React from 'react'
import Boton from './Boton'
import Materias from './Materias'
import '../Estilos/FormularioRegistroDocente.css'

const FormularioRegistroDocente = () => {
  return (
      <div className='formulario'>
        <form action="">
            <h3 className='titulo-formulario'>Registro de Usuario</h3>
            <div className='contenedor-columnas'>
                <div className='columna columna1'>
                <label htmlFor="">Rol(es)  permitidos</label><br />
                    <div className='contenedor-check'>
                       
                        <label htmlFor="">Docente:</label>
                        <input type="radio" className='check' /><br />
                        <label htmlFor="">Administrador:</label>
                        <input type="radio" className='check'/><br />
                        
                    </div>
                       
                         <label htmlFor="">Nombre(s):</label><br />
                        <input type="text" /><br />
                        <label htmlFor="">Apellido(s):</label><br />
                        <input type="text" /><br />
                        <label htmlFor="">Codigo Sis:</label><br />
                        <input type="text" /><br />
                        <label htmlFor="">Correo Electronico:</label><br />
                        <input type="text" /><br />
                        <label htmlFor="">Contraseña: </label><br />
                        <input type="text" /><br />
                </div>
                <div className='columna columna2'>
                        <label htmlFor="">Materias:</label><br />
                        <Materias/>
                </div>
            </div>
            <div className='contendor-botones'>
                <Boton
                titulo={'Cancelar'}
                tipoBoton={'secundario'}
                />
                <Boton
                titulo={'Registrar'}
                tipoBoton={'principal'}
                />
            </div>
         

           
        </form>
      </div>

  )
}

export default FormularioRegistroDocente