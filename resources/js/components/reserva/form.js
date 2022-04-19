//import React, {useEffect, useState, Fragment} from 'react';
import ReactDOM from 'react-dom';

import reservaServices from "../../services/Reserva"
import SolicitarReserva from '../SolicitarReserva';
import React, { Component } from 'react'

export default class Form extends Component {
    constructor(props){
        super(props);
        this.state = {
            datos: this.fetchDataMateria(),
            numero: 0,
        }
    }
    async fetchDataMateria(){
        const res = await reservaServices.list();
        console.log("valores xd", res.data);
        return res.data;
    }

  render() {
    return (
      <div><SolicitarReserva listMateria = {this.state.datos}/></div>
    )
  }
}

/*
function Form(){

    const [listMateria , setListMateria] = useState([]);

    useEffect(()=>{
        async function fetchDataMateria(){
            const res = await reservaServices.list();
            console.log("valores xd", res);
            setListMateria(res.data)
        }
        fetchDataMateria();
    },[]);
    return(
        <div>
            <SolicitarReserva listMateria = {listMateria}/>
            {/*
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
            *//*}*/ 
        /*</div>
    );
}

export default Form;
*/
if (document.getElementById('example')) {
    ReactDOM.render(<Form />, document.getElementById('example'));
}