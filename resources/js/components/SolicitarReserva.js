import React, { Component } from 'react'
import Menu from './Menu'
import DatosApp from '../utilidades/DatosApp';
import 'bootstrap/dist/js/bootstrap.bundle'
import 'bootstrap/dist/css/bootstrap.min.css';
import reservaServices from "../services/Reserva"
export default class SolicitarReserva extends Component {
    constructor(props) {
        super(props);
        this.matDocente = this.fetchDataMateria();
        console.log("rec", this.matDocente)
        //DatosApp.getDatosMateria();
        //console.log("recupmat", this.props.listMateria);
        this.horarios = DatosApp.getHorarios();
        this.state = {
            materia: this.matDocente[0],
            numeroEst: 0,
            fecha: "",
            horario: this.horarios[0],
            periodos: 1
        }
    }

    async fetchDataMateria(){
        const res = await reservaServices.list();
        console.log("valores", res.data);
        return res.data;
    }

    render() {
        return (
            <div>
                <Menu />
                <form>
                    <div className="mb-3">
                        <label className="form-label">Materia</label>
                        <select className="form-select" aria-label="Default select example">
                            {this.matDocente.map((e, indice) =>
                                <option key={indice} onClick={() => this.setState({ materia: this.matDocente[indice] })}>{e}</option>
                            )}
                        </select>
                    </div>
                    <div className="mb-3">
                        <label for="exampleInputEmail1" className="form-label">Numero de estudiantes</label>
                        <input type="number" onChange={event => this.setState({ numeroEst: event.target.value })} className="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </div>
                    <div className="mb-3">
                        <label for="fechaReserva" className="form-label">Fecha</label>
                        <input type="date" onChange={event => this.setState({ fecha: event.target.value })} className="form-control" id="fechaReserva" aria-describedby="fechaReserva" />
                    </div>
                    <div className="mb-3">
                        <label className="form-label">Horario</label>
                        <select className="form-select" aria-label="Default select example">
                            {this.horarios.map((e, indice) =>
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
        )
    }
}
