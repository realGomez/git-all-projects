 import _ from 'lodash';
import  './style.css'
 import  Icon from './logo.png'
    function component() {
        var element = document.createElement('div');

           // Lodash, currently included via a script, is required for this line to work
               // Lodash, now imported by this script
                element.innerHTML = _.join(['Hello', 'webpack'], ' ');
        element.classList.add('hello');
        var icon = new Image();
        icon.src =  Icon;

        element.appendChild(icon);
        return element;
    }

document.body.appendChild(component());