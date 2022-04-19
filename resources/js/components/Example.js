import React from 'react';
import ReactDOM from 'react-dom';
import FormularioRegistroDocente from './FormularioRegistroDocente';

function Example() {
    return ( <div>

        <FormularioRegistroDocente/>

      </div>);
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
