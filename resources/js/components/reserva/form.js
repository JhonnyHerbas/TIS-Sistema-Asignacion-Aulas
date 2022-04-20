import React, { useEffect, useState, Fragment } from 'react';
import ReactDOM from 'react-dom';
import reservaServices from "../../services/Reserva"
import Menu from '../Menu';
import 'bootstrap/dist/js/bootstrap.bundle'
import 'bootstrap/dist/css/bootstrap.min.css';

//import SolicitarReserva from '../SolicitarReserva';
//import React, { Component } from 'react'
/*export default class Form extends Component {
    constructor(props){
        super(props);
        this.state = {
            datos: this.fetchDataMateria(),
            numero: 0,
        }
    }
    async fetchDataMateria(){
        const res = await reservaServices.list();
        //console.log("valores xd", res.data);
        return res.data;
    }

  render() {
    return (
      <div><SolicitarReserva listMateria = {this.state.datos}/></div>
    )
  }
}*/
import DatosApp from '../../utilidades/DatosApp';


function Form() {
    const horarios = DatosApp.getHorarios();
    const [listMateria, setListMateria] = useState([]);

    useEffect(() => {
        async function fetchDataMateria() {
            const res = await reservaServices.listgru("/doc0214");
            //console.log("valores xd", res);
            setListMateria(res.data)
        }
        fetchDataMateria();
    }, []);
    return (
        <div>
            <Menu />
            <form>
                <div className="mb-3">
                    <label className="form-label">Materia</label>
                    <select className="form-select" aria-label="Default select example">
                        {listMateria.map((e, indice) =>
                            <option key={indice}>{e.Nume_G} - {e.Nomb_M}</option>
                        )}
                    </select>
                </div>
                
                <div className="mb-3">
                    <label for="exampleInputEmail1" className="form-label">Numero de estudiantes</label>
                    <input type="number" className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div className="mb-3">
                    <label for="fechaReserva" className="form-label">Fecha</label>
                    <input type="date" className="form-control" id="fechaReserva" aria-describedby="fechaReserva" />
                </div>
                <div className="mb-3">
                    <label className="form-label">Horario</label>
                    <select className="form-select" aria-label="Default select example">
                        {horarios.map((e, indice) =>
                            <option key={indice} onClick={() => this.setState({ horario: this.horarios[indice] })}>{e}</option>
                        )}
                    </select>
                </div>
                <div className="mb-3">
                    <label className="form-label">Periodos</label>
                    <select className="form-select" aria-label="Default select example">
                        <option value="0" selected>1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                        <option value="6">7</option>
                        <option value="7">8</option>
                        <option value="8">9</option>
                        <option value="9">10</option>
                    </select>
                    <div class="form-text">6:45 - 15:15</div>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Confirm identity</button>
                
            </form>
        </div>
    );
}

export default Form;

if (document.getElementById('example')) {
    ReactDOM.render(<Form />, document.getElementById('example'));
}

{/*
        <div>
            <select defaultValue={'DEFAULT'}>
                <option value={'DEFAULT'} disabled>Choose a materia ...</option>
                {
                    listMateria.map((item)=>{
                        return(
                            <option key={item.SisM_M} value={item.SisM_M} >{item.Nomb_M}</option>
                        ) 
                    })
                }
            </select>
        </div>
            */}