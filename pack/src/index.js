 import _ from 'lodash';
 import  './style.css'
 import  Icon from './logo.png'
 import printMe from './print.js'

    function component() {
        var element = document.createElement('div');

       // Lodash, currently included via a script, is required for this line to work
       // Lodash, now imported by this script
        element.innerHTML = _.join(['Hello', 'webpack'], ' ');
        element.classList.add('hello');
        var icon = new Image();
        icon.src =  Icon;

        console.log(printMe());
        var btn = document.createElement('button');
        btn.innerHTML = "click me and check the console";
        btn.onclick = printMe;

        element.appendChild(btn);
        element.appendChild(icon);
        return element;
    }

document.body.appendChild(component());