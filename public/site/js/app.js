'use strict'
const switcher = document.querySelector('#btn');
const icon = document.getElementById('js-icon')
switcher.addEventListener('click', function(){
    document.documentElement.classList.toggle('dark-theme')
    const className = document.documentElement.className;
    if(className=="dark-theme"){
        icon.classList.remove('ph-sun')
        icon.classList.add('ph-moon')
        
    }
    else{
        icon.classList.add('ph-sun')
        icon.classList.remove('ph-moon')
        console.log(icon)
    }
    console.log('current class name:' + className);
});
