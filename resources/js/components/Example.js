import React from 'react';
import ReactDOM from 'react-dom';
import FormularioRegistroDocente from '../components/FormularioRegistroDocente';
import Boton from '../components/Boton'
import { divide } from 'lodash';
function Example() {
    return (
      <div>
        
        <FormularioRegistroDocente/>
      
      
      </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
