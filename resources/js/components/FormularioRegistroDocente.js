import React, { useState } from 'react'
import '../Estilos/FormularioRegistroDocente.css'

const FormularioRegistroDocente = () => {
    const [ errornombre, setErrornombre] = useState(false);
    const [ errorapellido, setErrorapellido] = useState(false);
    const [ errorcodigo, setErrorcodigo] = useState(false);
    const [ rolDocente , setRolDocente] = useState(true);
    const [ nombre ,  setNombre] = useState('');
    const [nombreEstilo , setNombreEstilo] = useState('');
    const [ apellido ,  setApellido ] = useState('');
    const [ apellidoEstilo , setApellidoEstilo] = useState('');
    const [ codigosis , setCodigosis] = useState('');
    const [ codigoEstilo , setCodigoEstilo]=useState('');
    const [ correo ,  setCorreo] = useState('');
    const [ contrasena ,  setContrasena] = useState('');




    let objetoMaterias = [
        {
            "id":"1",
            "nombre" :"Introduccion a la programacion",
            "grupo": "2F"
        },
        {
            "id":"2",
            "nombre" :"MAteria 2",
            "grupo": "2F"
        },
        {
            "id":"3",
            "nombre" :"materia 3",
            "grupo": "2F"
        },
        {
            "id":"4",
            "nombre" :"materia 4",
            "grupo": "2F"
        },
        {
            "id":"5",
            "nombre" :"materia 5",
            "grupo": "2F"
        },
        {
            "id":"6",
            "nombre" :"materia 6",
            "grupo": "2F"
        },
        {
            "id":"7",
            "nombre" :"materia 7",
            "grupo": "2F"
        },
        {
            "id":"8",
            "nombre" :"materia 8",
            "grupo": "2F"
        },
        {
            "id":"9",
            "nombre" :"materia 9",
            "grupo": "2F"
        },
        {
            "id":"10",
            "nombre" :"materia 10",
            "grupo": "2F"
        }

    ]
    const [materias , setMaterias] = useState(new Array(objetoMaterias.length).fill(false));
    const [ listamaterias , setListamaterias] = useState([]);
    const contarMaterias = () =>{
        for(let i = 0; i < objetoMaterias; i++){
            console.log("entro aqui");
            if(materias[i] === true){
                setTotalMaterias(totalMaterias+1);
                console.log("Contando materias");
            }
        }
    }
    const enviarDocente = (e) => {
        const docente = {
                rolDocente : rolDocente,
                nombreDocente : nombre,
                apellidoDocente : apellido,
                codigoDocente : codigosis,
                correoDocente : correo,
                contrasenaDocente : contrasena,
                materias : listamaterias
            }
        // contarMaterias();


        console.log(listamaterias.length);
        if(errornombre === false && errorapellido == false && errorcodigo === false && listamaterias.length > 0 ){

            console.log("se envio sin errores");
            e.target.reset()
            setNombreEstilo('');
            setApellidoEstilo('');
            setCodigoEstilo('');
            setListamaterias(new Array(objetoMaterias.length).fill(false));
            console.log(docente);


        }else{

            console.log("se envio con errores")
            console.log(docente);

        }
        e.preventDefault();

    }
    const manejoCheck = (e) => {

        const materiasActualizadas = materias.map((item, index) =>
            index === e ? !item: item
        );

        setMaterias(materiasActualizadas);
        const materiasNombres= [];
        for(let x = 0; x < objetoMaterias.length; x++){
            if(materiasActualizadas[x] == true){
                materiasNombres.push(objetoMaterias[x].nombre);


            }
        }
        setListamaterias(materiasNombres);
    }


    const manejoblurnombre = (e) =>{
        var regex = new RegExp("^[a-zA-Z ]+$");
        var valido = regex.test(nombre);
        if(valido === false){
            setNombreEstilo('error');
            setErrornombre(true);
        }else{
            setNombreEstilo('');
            setErrornombre(false);
        }
    }
    const manejoblurapellido = (e) =>{
        var regex = new RegExp("^[a-zA-Z ]+$");
        var valido = regex.test(apellido);
        if(valido === false){
            setErrorapellido(true);
            setApellidoEstilo('error');
        }else{
            setApellidoEstilo('');
            setErrorapellido(false);


        }
    }
    const manejoblurcodigo = (e) =>{
        var regex = new RegExp("^[0-9+$]");
        var valido = regex.test(codigosis);
        if(valido === false){
            setErrorcodigo(true);
            setCodigoEstilo('error');

        }else{
            setCodigoEstilo('');
            setErrorcodigo(false);
        }
    }
  return (
      <div className='formulario-registro-docente'>
        <form  onSubmit={enviarDocente} autoComplete="on">
            <h3 className='titulo-formulario'>Registro de Usuario</h3>
            <div className='contenedor-columnas'>
                <div className='columna columna1'>
                <label htmlFor="">Rol(es)  permitidos :</label><br />
                    <div className='contenedor-check'>

                        <label htmlFor="" className='check-titulo'>Docente:</label>
                        <input type="checkbox" className='check' checked/><br />
                        <label htmlFor="" className='check-titulo'>Administrador:</label>
                        <input type="checkbox" className='check' disabled/><br />

                    </div>

                         <label htmlFor="">Nombre(s):</label><br />
                        <input
                            className={`input ${nombreEstilo}`}
                            type="text"
                            onChange={(e) => setNombre(e.target.value)}
                            maxLength="40"
                            minLength="3"
                            onBlur={manejoblurnombre}
                            required
                            /><br />
                        <label htmlFor="">Apellido(s):</label><br />
                        <input
                            className={`input ${apellidoEstilo}`}
                            type="text"
                            onChange={(e) => setApellido(e.target.value)}
                            maxLength="60"
                            minLength="3"
                            onBlur={manejoblurapellido}
                            required
                        /><br />
                        <label htmlFor="codigoSis">Codigo Sis:</label><br />
                        <input
                            className={`input ${codigoEstilo}`}
                            type="text"
                            onChange={(e) => setCodigosis(e.target.value) }
                            minLength="9"
                            maxLength="9"
                            onBlur={manejoblurcodigo}
                            required
                        /><br />
                        <label htmlFor="correo">Correo Electronico:</label><br />
                        <input
                            className='input'
                            type="email"
                            onChange={ (e) => setCorreo(e.target.value)}
                            required
                         /><br />
                        <label htmlFor="contrasena">Contraseña: </label><br />
                        <input
                            className='input input-contrasena'
                            type="password"
                            onChange={ (e) => setContrasena(e.target.value)}
                            maxLength="14"
                            minLength="8"
                            required
                            /><br />
                </div>
                <div className='columna columna2'>
                        <label htmlFor="" className='titulo-materias'>Materias:</label><br />
                        <div className='linea'></div>

                        {/* <Materias/> */}
                        <div className='contenedor-materias-todas'>
                        {
                            objetoMaterias.map(function (materia, index){

                                return <div key={materia.id} className='contenedor-una-materia'>
                                    <label>{materia.nombre}  : Grupo : {materia.grupo}</label>
                                    <input
                                        key={materia.id}
                                        className={`${materia.nombre}-${materia.grupo}`}
                                        type="checkbox"
                                        name={materia.nombre}
                                        onChange={()=> manejoCheck(index)}
                                        checked={materias[index]}
                                        />
                                </div>

                            })
                        }
                        </div>
                </div>
            </div>
            <div className='contendor-botones'>
                 <button className='boton-submit' type='submit' value="submit" >Agregar Docente</button>
            </div>



        </form>
      </div>

  )
}

export default FormularioRegistroDocente
