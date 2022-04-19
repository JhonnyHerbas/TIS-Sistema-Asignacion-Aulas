const baseUrl = "http://localhost:8000/api/reserva";
import axios from "axios";
const reserva = {};

reserva.list = async () => {
    const urlList = baseUrl+"/materia"
    const res = await axios.get(urlList)
    .then(response=>{ return response.data })
    .catch(error=>{ return error; })
    return res;
}

reserva.listgru = async (id) => {
    const urlList = baseUrl+"/grupo"+id
    const res = await axios.get(urlList)
    .then(response=>{return response.data})
    .catch(error=>{return error;})
    return res;
}
reserva.save = async(data)=>{
    const urlSave = baseUrl + "/create"
    const res = await axios.post(urlSave,data)
    .then(response=>{return response.data})
    .catch(error=>{return error;})
    return res; 
}
reserva.lista = async (id) => {
    const urlList = baseUrl+"/grupomateria"+id
    const res = await axios.get(urlList)
    .then(response=>{return response.data})
    .catch(error=>{return error;})
    return res;
}

export default reserva