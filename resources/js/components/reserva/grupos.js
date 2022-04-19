import React, {useEffect, useState, Fragment} from 'react';
import ReactDOM from 'react-dom';

import reservaServices from "../../services/Reserva"

function Grupo(){
    
    const[fechaRegis,setFechaRegis] = useState(null);
    const[horaIni,setHoraIni] = useState(null);
    const[periodos,setPeriodo] = useState(null);
    const[cantEstu,setCantidad] = useState(null);
    const[estado,setEstado] = useState(null);
    const[motivo,setMotivo] = useState(null);
    const[dia,setDia] = useState(null);
    const[horaFin,setHoraFin] = useState(null);

    const [listGrupo , setListGrupo] = useState([]);

    useEffect(()=>{
        async function fetchDataGrupo(){
            const res2 = await reservaServices.listgru();
            setListGrupo(res2.data)
        }
        fetchDataGrupo();
    },[]);

    const saveEmployee = async ()=>{
        const data={

        }
        const res = await reservaServices.save(data);
        
        if(res.success){
            alert(res.message)
        }
        else{
            alert(res.message)
        }
    }
    return(
        <div>
            <select defaultValue={'DEFAULT'}>
                <option value={'DEFAULT'} disabled>Choose a grupo ...</option>
                {
                    listGrupo.map((item)=>{
                        return(
                            <option key={item.Nume_G} value={item.Nume_G} >{item.Nume_G}</option>
                        ) 
                    })
                }
            </select>
        </div>
    );
}

export default Grupo;

if (document.getElementById('example')) {
    ReactDOM.render(<Grupo />, document.getElementById('example'));
}