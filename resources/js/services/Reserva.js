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

export default reserva