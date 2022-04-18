import React, {useEffect, useState, Fragment} from 'react';
import ReactDOM from 'react-dom';

import reservaServices from "../../services/Reserva"

function Form(){
    const [listMateria , setListMateria] = useState([]);
    var value = '?';
    useEffect(()=>{
        async function fetchDataMateria(){
            const res = await reservaServices.list();
            setListMateria(res.data)
        }
        fetchDataMateria();
    },[]);
    return(
        <div>
            <select defaultValue={'DEFAULT'} value={value} onChange={e => setValue(e.currentTarget.value)}>
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
    );
}

export default Form;

if (document.getElementById('example')) {
    ReactDOM.render(<Form />, document.getElementById('example'));
}